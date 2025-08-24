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
}
