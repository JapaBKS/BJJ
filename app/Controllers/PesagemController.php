<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Services\PesagemService;

class PesagemController extends Controller
{
    public function create(): void
    {
        $this->view('pesagem/create', ['titulo' => 'Registrar Pesagem']);
    }

    public function store(): void
    {
        $inscricaoId = (int)($_POST['inscricao_id'] ?? 0);
        $peso = (float)($_POST['peso_oficial'] ?? 0);
        $uniformeOk = isset($_POST['uniforme_ok']);
        $obs = $_POST['observacoes'] ?? null;
        $res = PesagemService::registrar($inscricaoId, $peso, $uniformeOk, $obs);
        $this->view('pesagem/result', ['titulo' => 'Resultado Pesagem', 'res' => $res]);
    }
}
