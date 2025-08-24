<?php

namespace App\Repositories;

use PDO;

final class AtletaRepository
{
  public static function create(array $data): int
  {
    $sql = "INSERT INTO atletas (nome,email,data_nascimento,peso_kg,faixa,academia_id)
            VALUES (?,?,?,?,?,?)";
    $st = Db::pdo()->prepare($sql);
    $st->execute([
      $data['nome'],
      $data['email'] ?? null,
      $data['data_nascimento'],
      $data['peso_kg'],
      $data['faixa'],
      $data['academia_id'] ?? null
    ]);
    return (int)Db::pdo()->lastInsertId();
  }

  public static function find(int $id): ?array
  {
    $st = Db::pdo()->prepare("SELECT * FROM atletas WHERE id=?");
    $st->execute([$id]);
    $row = $st->fetch(PDO::FETCH_ASSOC);
    return $row ?: null;
  }

  public static function all(): array
  {
    return Db::pdo()->query("SELECT * FROM atletas ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function historicoResultados(int $atletaId): array
  {
    $sql = "SELECT r.competicao_id, r.categoria_id, r.colocacao,
                c.nome AS categoria, cp.nome AS competicao, cp.data AS data_comp
            FROM resultados r
            INNER JOIN categorias c ON c.id = r.categoria_id
            INNER JOIN competicoes cp ON cp.id = r.competicao_id
            WHERE r.atleta_id=?
            ORDER BY cp.data DESC, r.categoria_id";
    $st = Db::pdo()->prepare($sql);
    $st->execute([$atletaId]);
    return $st->fetchAll(\PDO::FETCH_ASSOC);
  }

  public static function historicoLutas(int $atletaId): array
  {
    // lista lutas em que o atleta participou (A ou B), com um campo 'resultado'
    $sql = "SELECT l.*, 
                CASE 
                  WHEN l.vencedor_id IS NULL THEN '—'
                  WHEN l.vencedor_id = :aid THEN 'Vitória'
                  ELSE 'Derrota'
                END AS resultado
            FROM lutas l
            WHERE l.atleta_a_id = :aid OR l.atleta_b_id = :aid
            ORDER BY l.categoria_id, l.ordem";
    $st = Db::pdo()->prepare($sql);
    $st->execute(['aid' => $atletaId]);
    return $st->fetchAll(\PDO::FETCH_ASSOC);
  }

  public static function medalhasTotais(int $atletaId): array
  {
    $sql = "SELECT 
            SUM(CASE WHEN r.colocacao='ouro'   THEN 1 ELSE 0 END) AS ouro,
            SUM(CASE WHEN r.colocacao='prata'  THEN 1 ELSE 0 END) AS prata,
            SUM(CASE WHEN r.colocacao='bronze' THEN 1 ELSE 0 END) AS bronze
          FROM resultados r
          WHERE r.atleta_id=?";
    $st = Db::pdo()->prepare($sql);
    $st->execute([$atletaId]);
    $row = $st->fetch(\PDO::FETCH_ASSOC) ?: ['ouro' => 0, 'prata' => 0, 'bronze' => 0];
    return [
      'ouro'   => (int)$row['ouro'],
      'prata'  => (int)$row['prata'],
      'bronze' => (int)$row['bronze']
    ];
  }
}
