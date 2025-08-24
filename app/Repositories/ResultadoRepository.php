<?php

namespace App\Repositories;

use PDO;

final class ResultadoRepository
{

    public static function clearCategoria(int $categoriaId): void
    {
        $st = Db::pdo()->prepare("DELETE FROM resultados WHERE categoria_id=?");
        $st->execute([$categoriaId]);
    }

    public static function add(int $competicaoId, int $categoriaId, int $atletaId, string $colocacao): void
    {
        $st = Db::pdo()->prepare("INSERT INTO resultados (competicao_id,categoria_id,atleta_id,colocacao) VALUES (?,?,?,?)");
        $st->execute([$competicaoId, $categoriaId, $atletaId, $colocacao]);
    }

    // Ranking por competição (9-3-1; desempate: mais ouros, depois pratas, depois bronzes)
    public static function rankingPorCompeticao(int $competicaoId): array
    {
        $sql = "
            SELECT ac.id AS academia_id, ac.nome AS academia,
                    SUM(CASE WHEN r.colocacao='ouro'   THEN 9
                            WHEN r.colocacao='prata'  THEN 3
                            WHEN r.colocacao='bronze' THEN 1 ELSE 0 END) AS pontos,
                    SUM(CASE WHEN r.colocacao='ouro'   THEN 1 ELSE 0 END) AS ouros,
                    SUM(CASE WHEN r.colocacao='prata'  THEN 1 ELSE 0 END) AS pratas,
                    SUM(CASE WHEN r.colocacao='bronze' THEN 1 ELSE 0 END) AS bronzes
            FROM resultados r
            INNER JOIN atletas a ON a.id = r.atleta_id
            LEFT JOIN academias ac ON ac.id = a.academia_id
            WHERE r.competicao_id=?
            GROUP BY ac.id, ac.nome
            ORDER BY pontos DESC, ouros DESC, pratas DESC, bronzes DESC, academia ASC";
        $st = Db::pdo()->prepare($sql);
        $st->execute([$competicaoId]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function resultadosDetalhe(int $competicaoId): array
    {
        $sql = "
            SELECT r.id, r.categoria_id, r.atleta_id, r.colocacao,
                    a.nome AS atleta, ac.nome AS academia
            FROM resultados r
            INNER JOIN atletas a ON a.id = r.atleta_id
            LEFT JOIN academias ac ON ac.id = a.academia_id
            WHERE r.competicao_id=?
            ORDER BY r.categoria_id, FIELD(r.colocacao,'ouro','prata','bronze'), a.nome";
        $st = Db::pdo()->prepare($sql);
        $st->execute([$competicaoId]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}
