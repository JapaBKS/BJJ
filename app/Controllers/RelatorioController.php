<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\Db;
use PDO;

class RelatorioController extends Controller
{

    public function inscricoes($competicao_id): void
    {
        $pdo = Db::pdo();
        $sql = "
            SELECT c.id AS categoria_id, c.nome AS categoria,
                    COUNT(i.id) AS inscritos,
                    SUM(CASE WHEN i.status='aprovada' THEN 1 ELSE 0 END)  AS aprovadas,
                    SUM(CASE WHEN i.status='reprovada' THEN 1 ELSE 0 END) AS reprovadas
            FROM categorias c
            LEFT JOIN inscricoes i ON i.categoria_id=c.id
            WHERE c.competicao_id=?
            GROUP BY c.id, c.nome
            ORDER BY c.nome";
        $st = $pdo->prepare($sql);
        $st->execute([(int)$competicao_id]);
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);

        $this->view('relatorios/inscricoes', ['titulo' => 'Relatório de Inscrições', 'linhas' => $rows, 'competicao_id' => (int)$competicao_id]);
    }
}
