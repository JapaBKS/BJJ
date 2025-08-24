<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\LutaRepository;
use App\Services\ChaveamentoService;

class ChaveamentoController extends Controller
{

    public function gerar($categoria_id): void
    {
        ChaveamentoService::gerar((int)$categoria_id);
        $this->redirect('/BJJ/public/chaveamentos/' . $categoria_id);
    }

    public function getJson($categoria_id): void
    {
        $lutas = LutaRepository::allByCategoria((int)$categoria_id);
        $this->json(['lutas' => $lutas]);
    }

    public function show($categoria_id): void
    {
        $lutas = \App\Repositories\LutaRepository::allByCategoriaWithNames((int)$categoria_id);
        $this->view('chaveamento/show', [
            'titulo' => 'Chaveamento',
            'lutas'  => $lutas
        ]);
    }

    public function editLuta($luta_id): void
    {
        $luta = \App\Repositories\LutaRepository::find((int)$luta_id);
        if (!$luta) {
            http_response_code(404);
            echo "Luta não encontrada.";
            return;
        }

        // lista rápida de atletas aprovados nessa categoria para facilitar ajustes
        $aprovados = \App\Repositories\InscricaoRepository::aprovadasComAtletaPorCategoria((int)$luta['categoria_id']);
        $this->view('chaveamento/edit', ['titulo' => 'Editar Luta', 'luta' => $luta, 'aprovados' => $aprovados]);
    }

    public function updateLuta($luta_id): void
    {
        $a = $_POST['atleta_a_id'] !== '' ? (int)$_POST['atleta_a_id'] : null;
        $b = $_POST['atleta_b_id'] !== '' ? (int)$_POST['atleta_b_id'] : null;
        $prox = $_POST['proxima_luta_id'] !== '' ? (int)$_POST['proxima_luta_id'] : null;

        \App\Repositories\LutaRepository::updateParticipants((int)$luta_id, $a, $b);
        \App\Repositories\LutaRepository::updateNext((int)$luta_id, $prox);

        // se pediu para limpar vencedor (ex.: W.O / ajuste), faça
        if (!empty($_POST['clear_winner'])) {
            \App\Repositories\LutaRepository::clearWinnerCascade((int)$luta_id);
        }

        $luta = \App\Repositories\LutaRepository::find((int)$luta_id);
        $this->redirect('/BJJ/public/chaveamentos/' . $luta['categoria_id']);
    }
}
