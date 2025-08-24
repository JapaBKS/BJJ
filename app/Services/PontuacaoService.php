<?php

namespace App\Services;

use App\Repositories\LutaEventoRepository;

final class PontuacaoService
{
    private static array $map = [
        'queda'   => 2,
        'raspagem' => 2,
        'passagem' => 3,
        'montada' => 4,
        'costas'  => 4,
        'joelho'  => 2,
    ];

    public static function adicionarPonto(int $lutaId, int $atletaId, string $subtipo): array
    {
        $valor = self::$map[$subtipo] ?? 0;
        LutaEventoRepository::add([
            'luta_id' => $lutaId,
            'atleta_id' => $atletaId,
            'tipo' => 'ponto',
            'subtipo' => $subtipo,
            'valor' => $valor
        ]);
        return ['ok' => true, 'msg' => "Ponto ($subtipo +$valor) registrado"];
    }

    public static function adicionarVantagem(int $lutaId, int $atletaId): array
    {
        LutaEventoRepository::add([
            'luta_id' => $lutaId,
            'atleta_id' => $atletaId,
            'tipo' => 'vantagem',
            'valor' => 1
        ]);
        return ['ok' => true, 'msg' => "Vantagem +1"];
    }

    public static function adicionarPunicao(int $lutaId, int $atletaId, string $subtipo = 'falta_de_combatividade'): array
    {
        LutaEventoRepository::add([
            'luta_id' => $lutaId,
            'atleta_id' => $atletaId,
            'tipo' => 'punicao',
            'subtipo' => $subtipo,
            'valor' => 0
        ]);
        return ['ok' => true, 'msg' => "Punição registrada ($subtipo)"];
    }

    public static function placarAtual(int $lutaId): array
    {
        $evs = LutaEventoRepository::byLuta($lutaId);
        $score = []; // [atletaId => ['pontos'=>0,'vantagens'=>0,'punicoes'=>0]]
        foreach ($evs as $e) {
            $aid = (int)$e['atleta_id'];
            if (!isset($score[$aid])) $score[$aid] = ['pontos' => 0, 'vantagens' => 0, 'punicoes' => 0];
            if ($e['tipo'] === 'ponto') {
                $score[$aid]['pontos'] += (int)$e['valor'];
            } elseif ($e['tipo'] === 'vantagem') {
                $score[$aid]['vantagens'] += 1;
            } elseif ($e['tipo'] === 'punicao') {
                $score[$aid]['punicoes'] += 1;
            }
        }
        return $score;
    }
}
