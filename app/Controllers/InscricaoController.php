<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\{AtletaRepository, CategoriaRepository};
use App\Services\InscricaoService;

class InscricaoController extends Controller
{
    public function create(): void
    {
        $baseUrl = $GLOBALS['__baseUrl'] ?? '';
        $atletaId = isset($_GET['atleta_id']) ? (int)$_GET['atleta_id'] : null;
        $atleta = $atletaId ? AtletaRepository::find($atletaId) : null;
        $categorias = CategoriaRepository::allByCompeticao(1); // por enquanto 1
        $this->view('inscricao/create', compact('atleta', 'categorias', 'baseUrl') + ['titulo' => 'Nova Inscrição']);
    }

    public function store(): void
    {
        $atletaId = (int)($_POST['atleta_id'] ?? 0);
        $categoriaId = (int)($_POST['categoria_id'] ?? 0);
        $res = InscricaoService::inscrever($atletaId, $categoriaId);
        $this->view('inscricao/result', ['titulo' => 'Resultado Inscrição', 'res' => $res]);
    }
}
