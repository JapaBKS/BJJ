<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\RankingService;
use App\Repositories\ResultadoRepository;

class RankingController extends Controller
{

    public function show($competicao_id): void
    {
        $rank = RankingService::ranking((int)$competicao_id);
        $this->view('ranking/show', ['titulo' => 'Ranking de Academias', 'ranking' => $rank, 'competicao_id' => (int)$competicao_id]);
    }

    // relatório detalhado de resultados (RF16)
    public function resultados($competicao_id): void
    {
        $rows = ResultadoRepository::resultadosDetalhe((int)$competicao_id);
        $this->view('relatorios/resultados', ['titulo' => 'Resultados por Atleta', 'linhas' => $rows, 'competicao_id' => (int)$competicao_id]);
    }
}
