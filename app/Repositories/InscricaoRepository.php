<?php

namespace App\Repositories;

use PDO;

final class InscricaoRepository
{
    public static function create(int $atletaId, int $categoriaId, string $status = 'pendente', ?string $motivo = null): int
    {
        $st = Db::pdo()->prepare("INSERT INTO inscricoes (atleta_id,categoria_id,status,motivo_reprovacao) VALUES (?,?,?,?)");
        $st->execute([$atletaId, $categoriaId, $status, $motivo]);
        return (int)Db::pdo()->lastInsertId();
    }

    public static function updateStatus(int $id, string $status, ?string $motivo = null): void
    {
        $st = Db::pdo()->prepare("UPDATE inscricoes SET status=?, motivo_reprovacao=? WHERE id=?");
        $st->execute([$status, $motivo, $id]);
    }

    public static function find(int $id): ?array
    {
        $st = Db::pdo()->prepare("SELECT * FROM inscricoes WHERE id=?");
        $st->execute([$id]);
        $row = $st->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public static function byAtletaCategoria(int $atletaId, int $categoriaId): ?array
    {
        $st = Db::pdo()->prepare("SELECT * FROM inscricoes WHERE atleta_id=? AND categoria_id=?");
        $st->execute([$atletaId, $categoriaId]);
        $row = $st->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public static function aprovadasComAtletaPorCategoria(int $categoriaId): array
    {
        $sql = "SELECT i.id as inscricao_id, a.id as atleta_id, a.nome, a.faixa, a.peso_kg
            FROM inscricoes i
            INNER JOIN atletas a ON a.id = i.atleta_id
            WHERE i.categoria_id = ? AND i.status = 'aprovada'
            ORDER BY i.id ASC";
        $st = Db::pdo()->prepare($sql);
        $st->execute([$categoriaId]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}
