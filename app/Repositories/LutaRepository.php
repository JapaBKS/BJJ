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
            $data['proxima_luta_id'] ?? null
        ]);
        return (int)Db::pdo()->lastInsertId();
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
}
