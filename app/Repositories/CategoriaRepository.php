<?php

namespace App\Repositories;

use PDO;

final class CategoriaRepository
{
    public static function allByCompeticao(int $competicaoId): array
    {
        $st = Db::pdo()->prepare("SELECT * FROM categorias WHERE competicao_id=? ORDER BY nome");
        $st->execute([$competicaoId]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find(int $id): ?array
    {
        $st = Db::pdo()->prepare("SELECT * FROM categorias WHERE id=?");
        $st->execute([$id]);
        $row = $st->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }
}
