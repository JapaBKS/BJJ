<?php

namespace App\Repositories;

use PDO;

final class PesagemRepository
{
    public static function create(array $data): int
    {
        $st = Db::pdo()->prepare("INSERT INTO pesagens (inscricao_id,peso_oficial,uniforme_ok,status,observacoes) VALUES (?,?,?,?,?)");
        $st->execute([
            $data['inscricao_id'],
            $data['peso_oficial'],
            (int)$data['uniforme_ok'],
            $data['status'],
            $data['observacoes'] ?? null
        ]);
        return (int)Db::pdo()->lastInsertId();
    }
}
