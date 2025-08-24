<?php

namespace App\Services;

use App\Repositories\LutaRepository;
use App\Repositories\Db;
use App\Services\PodioService;

final class PartidaService
{
    public static function iniciar(int $lutaId): void
    {
        LutaRepository::touchStatus($lutaId, 'em_andamento');
    }

    public static function finalizar(int $lutaId, int $vencedorId): void
    {
        $luta = LutaRepository::find($lutaId);
        if (!$luta) return;

        // marca vencedor e finaliza a luta
        LutaRepository::updateWinner($lutaId, $vencedorId);

        // RF13: se houver próxima luta, coloca o vencedor nela
        if (!empty($luta['proxima_luta_id'])) {
            LutaRepository::setProximaParticipacao((int)$luta['proxima_luta_id'], $vencedorId);
        }

        // RF14 (automático): se esta luta é a FINAL, gera o pódio da categoria
        if (!empty($luta['fase']) && $luta['fase'] === 'final') {
            // tenta gerar pódio (ignora erro silenciosamente se final ainda incompleta)
            try {
                PodioService::gerarParaCategoria((int)$luta['categoria_id']);
            } catch (\Throwable $e) {
                // opcional: logar em storage/logs
            }
        }
    }
}
