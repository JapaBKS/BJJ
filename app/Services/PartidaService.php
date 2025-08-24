<?php

namespace App\Services;

use App\Repositories\LutaRepository;

final class PartidaService
{

    public static function iniciar(int $lutaId): void
    {
        LutaRepository::touchStatus($lutaId, 'em_andamento');
    }

    // ⬇️ NOVO: agora retorna um array com infos (inclui podio_gerado quando for final)
    public static function finalizar(int $lutaId, int $vencedorId): array
    {
        $luta = LutaRepository::find($lutaId);
        if (!$luta) {
            return ['ok' => false, 'msg' => 'Luta inexistente.'];
        }

        LutaRepository::updateWinner($lutaId, $vencedorId);

        // RF13: se houver próxima luta, coloca o vencedor nela
        if (!empty($luta['proxima_luta_id'])) {
            LutaRepository::setProximaParticipacao((int)$luta['proxima_luta_id'], $vencedorId);
        }

        $res = ['ok' => true, 'msg' => 'Luta finalizada.'];

        // ⬇️ RF14 automático: se for a FINAL, tenta gerar pódio imediatamente
        if (!empty($luta['fase']) && $luta['fase'] === 'final') {
            // PodioService está no mesmo namespace App\Services
            $podio = PodioService::gerarParaCategoria((int)$luta['categoria_id']);
            $res['podio_gerado'] = $podio['ok'] ?? false;
            if (!empty($podio['msg'])) $res['msg'] .= ' ' . $podio['msg'];
        }

        return $res;
    }
}
