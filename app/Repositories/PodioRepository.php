<?php

namespace App\Repositories;

use PDO;

final class PodioRepository
{
    public static function upsert(int $categoriaId, ?int $ouro, ?int $prata, ?int $b1, ?int $b2): void
    {
        $pdo = Db::pdo();
        // se existir, atualiza; senão cria
        $row = self::byCategoria($categoriaId);
        if ($row) {
            $st = $pdo->prepare("UPDATE podios
        SET ouro_atleta_id=?, prata_atleta_id=?, bronze1_atleta_id=?, bronze2_atleta_id=?, updated_at=NOW()
        WHERE categoria_id=?");
            $st->execute([$ouro, $prata, $b1, $b2, $categoriaId]);
        } else {
            $st = $pdo->prepare("INSERT INTO podios (categoria_id, ouro_atleta_id, prata_atleta_id, bronze1_atleta_id, bronze2_atleta_id)
        VALUES (?,?,?,?,?)");
            $st->execute([$categoriaId, $ouro, $prata, $b1, $b2]);
        }
    }

    public static function byCategoria(int $categoriaId): ?array
    {
        $st = Db::pdo()->prepare("SELECT * FROM podios WHERE categoria_id=?");
        $st->execute([$categoriaId]);
        $row = $st->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }
}
