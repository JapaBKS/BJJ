<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\AtletaRepository;

class AtletaController extends Controller
{
    public function create(): void
    {
        $this->view('atleta/create', ['titulo' => 'Cadastrar Atleta']);
    }

    public function store(): void
    {
        $data = [
            'nome' => $_POST['nome'] ?? '',
            'email' => $_POST['email'] ?? null,
            'data_nascimento' => $_POST['data_nascimento'] ?? '',
            'peso_kg' => (float)($_POST['peso_kg'] ?? 0),
            'faixa' => $_POST['faixa'] ?? 'branca',
            'academia_id' => !empty($_POST['academia_id']) ? (int)$_POST['academia_id'] : null
        ];
        $id = AtletaRepository::create($data);
        $this->redirect('/BJJ/public/inscricoes/nova?atleta_id=' . $id);
    }
}
