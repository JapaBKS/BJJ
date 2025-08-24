<?php

namespace App\Repositories;

use PDO;

final class LutaEventoRepository
{
    public static function add(array $data): int
    {
        $st = Db::pdo()->prepare("INSERT INTO luta_eventos (luta_id, atleta_id, tipo, subtipo, valor) VALUES (?,?,?,?,?)");
        $st->execute([
            $data['luta_id'],
            $data['atleta_id'],
            $data['tipo'],
            $data['subtipo'] ?? null,
            $data['valor'] ?? 0
        ]);
        return (int)Db::pdo()->lastInsertId();
    }

    public static function byLuta(int $lutaId): array
    {
        $st = Db::pdo()->prepare("SELECT * FROM luta_eventos WHERE luta_id=? ORDER BY id ASC");
        $st->execute([$lutaId]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}
