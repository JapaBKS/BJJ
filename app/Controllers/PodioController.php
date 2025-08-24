<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\PodioService;

class PodioController extends Controller
{

    public function gerar($categoria_id): void
    {
        $res = PodioService::gerarParaCategoria((int)$categoria_id);
        if (!$res['ok']) {
            $this->view('podio/show', ['titulo' => 'Pódio', 'erro' => $res['msg'], 'podio' => null]);
            return;
        }
        $this->redirect('/BJJ/public/podio/' . $categoria_id);
    }

    public function show($categoria_id): void
    {
        $podio = PodioService::podioComNomes((int)$categoria_id);
        $this->view('podio/show', ['titulo' => 'Pódio', 'podio' => $podio]);
    }
}
