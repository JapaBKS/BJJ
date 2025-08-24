<?php

namespace App\Services;

use App\Repositories\ResultadoRepository;

final class RankingService
{

    public static function ranking(int $competicaoId): array
    {
        // usa o repo que já aplica 9-3-1 e desempate por ouros, pratas, bronzes
        return ResultadoRepository::rankingPorCompeticao($competicaoId);
    }
}
