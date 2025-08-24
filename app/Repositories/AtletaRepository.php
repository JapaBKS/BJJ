<?php
namespace App\Repositories;

use PDO;

final class AtletaRepository {
  public static function create(array $data): int {
    $sql = "INSERT INTO atletas (nome,email,data_nascimento,peso_kg,faixa,academia_id)
            VALUES (?,?,?,?,?,?)";
    $st = Db::pdo()->prepare($sql);
    $st->execute([
      $data['nome'], $data['email'] ?? null, $data['data_nascimento'],
      $data['peso_kg'], $data['faixa'], $data['academia_id'] ?? null
    ]);
    return (int)Db::pdo()->lastInsertId();
  }

  public static function find(int $id): ?array {
    $st = Db::pdo()->prepare("SELECT * FROM atletas WHERE id=?");
    $st->execute([$id]);
    $row = $st->fetch(PDO::FETCH_ASSOC);
    return $row ?: null;
  }

  public static function all(): array {
    return Db::pdo()->query("SELECT * FROM atletas ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
  }
}
