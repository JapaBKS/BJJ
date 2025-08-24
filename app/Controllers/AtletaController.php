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

    public function show($id): void
    {
        $atleta = \App\Repositories\AtletaRepository::find((int)$id);
        if (!$atleta) {
            http_response_code(404);
            echo "Atleta não encontrado.";
            return;
        }
        $medalhas = \App\Repositories\AtletaRepository::medalhasTotais((int)$id);
        $resultados = \App\Repositories\AtletaRepository::historicoResultados((int)$id);
        $lutas = \App\Repositories\AtletaRepository::historicoLutas((int)$id);

        $this->view('atleta/show', [
            'titulo' => 'Perfil do Atleta',
            'atleta' => $atleta,
            'medalhas' => $medalhas,
            'resultados' => $resultados,
            'lutas' => $lutas
        ]);
    }
}
