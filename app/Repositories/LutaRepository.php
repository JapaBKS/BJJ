<?php

namespace App\Repositories;

use PDO;

final class LutaRepository
{
    public static function create(array $data): int
    {
        $sql = "INSERT INTO lutas (categoria_id,fase,ordem,atleta_a_id,atleta_b_id,proxima_luta_id)
                VALUES (?,?,?,?,?,?)";
        $st = Db::pdo()->prepare($sql);
        $st->execute([
            $data['categoria_id'],
            $data['fase'],
            $data['ordem'],
            $data['atleta_a_id'] ?? null,
            $data['atleta_b_id'] ?? null,
            $data['proxima_luta_id'] ?? null,
        ]);
        return (int) Db::pdo()->lastInsertId();
    }

    public static function allByCategoria(int $categoriaId): array
    {
        $st = Db::pdo()->prepare("SELECT * FROM lutas WHERE categoria_id=? ORDER BY ordem ASC");
        $st->execute([$categoriaId]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function resetCategoria(int $categoriaId): void
    {
        $st = Db::pdo()->prepare("DELETE FROM lutas WHERE categoria_id=?");
        $st->execute([$categoriaId]);
    }

    public static function find(int $id): ?array
    {
        $st = Db::pdo()->prepare("SELECT * FROM lutas WHERE id=?");
        $st->execute([$id]);
        $row = $st->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public static function updateWinner(int $lutaId, int $vencedorId): void
    {
        $st = Db::pdo()->prepare("UPDATE lutas SET vencedor_id=?, status='finalizada' WHERE id=?");
        $st->execute([$vencedorId, $lutaId]);
    }

    public static function setProximaParticipacao(int $proximaId, int $vencedorId): void
    {
        $prox = self::find($proximaId);
        if (!$prox) return;

        if (empty($prox['atleta_a_id'])) {
            $st = Db::pdo()->prepare("UPDATE lutas SET atleta_a_id=? WHERE id=?");
            $st->execute([$vencedorId, $proximaId]);
        } elseif (empty($prox['atleta_b_id'])) {
            $st = Db::pdo()->prepare("UPDATE lutas SET atleta_b_id=? WHERE id=?");
            $st->execute([$vencedorId, $proximaId]);
        }
    }

    public static function touchStatus(int $lutaId, string $status): void
    {
        $st = Db::pdo()->prepare("UPDATE lutas SET status=? WHERE id=?");
        $st->execute([$status, $lutaId]);
    }

    public static function allByCategoriaWithNames(int $categoriaId): array
    {
        $sql = "SELECT l.*,
                a1.nome AS atleta_a_nome,
                a2.nome AS atleta_b_nome,
                av.nome AS vencedor_nome
        FROM lutas l
        LEFT JOIN atletas a1 ON a1.id = l.atleta_a_id
        LEFT JOIN atletas a2 ON a2.id = l.atleta_b_id
        LEFT JOIN atletas av ON av.id = l.vencedor_id
        WHERE l.categoria_id = ?
        ORDER BY l.ordem ASC";
        $st = Db::pdo()->prepare($sql);
        $st->execute([$categoriaId]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}
