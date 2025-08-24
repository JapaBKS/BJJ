<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\LutaRepository;
use App\Services\{PontuacaoService, PartidaService};

class MesaController extends Controller
{
    public function show($luta_id): void
    {
        $luta = LutaRepository::find((int)$luta_id);
        if (!$luta) {
            http_response_code(404);
            echo "Luta não encontrada.";
            return;
        }

        $this->view('mesa/show', [
            'titulo' => 'Mesa do Mesário',
            'luta'   => $luta
        ]);
    }

    public function iniciar($luta_id): void
    {
        PartidaService::iniciar((int)$luta_id);
        $this->json(['ok' => true]);
    }

    public function pontuar($luta_id): void
    {
        $atletaId = (int)($_POST['atleta_id'] ?? 0);
        $tipo     = $_POST['tipo'] ?? '';
        $subtipo  = $_POST['subtipo'] ?? null;

        if ($tipo === 'ponto') {
            $res = PontuacaoService::adicionarPonto((int)$luta_id, $atletaId, (string)$subtipo);
        } elseif ($tipo === 'vantagem') {
            $res = PontuacaoService::adicionarVantagem((int)$luta_id, $atletaId);
        } elseif ($tipo === 'punicao') {
            $res = PontuacaoService::adicionarPunicao((int)$luta_id, $atletaId, (string)$subtipo ?? 'falta_de_combatividade');
        } else {
            $res = ['ok' => false, 'msg' => 'Tipo inválido'];
        }
        $this->json($res);
    }

    public function placar($luta_id): void
    {
        $score = \App\Services\PontuacaoService::placarAtual((int)$luta_id);
        $this->json(['ok' => true, 'score' => $score]);
    }

    public function finalizar($luta_id): void
    {
        $vencedorId = (int)($_POST['vencedor_id'] ?? 0);
        $res = \App\Services\PartidaService::finalizar((int)$luta_id, $vencedorId);
        $this->json($res);
    }
}
