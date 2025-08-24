<?php

namespace App\Services;

use App\Repositories\{InscricaoRepository, LutaRepository};

final class ChaveamentoService
{

    public static function gerar(int $categoriaId): void
    {
        // limpa chave anterior
        LutaRepository::resetCategoria($categoriaId);

        $inscritos = InscricaoRepository::aprovadasComAtletaPorCategoria($categoriaId);
        $total = count($inscritos);

        if ($total === 3) {
            self::gerarChaveDeTres($categoriaId, $inscritos);
        } else {
            self::gerarEliminacaoSimples($categoriaId, $inscritos);
        }
    }

    private static function gerarEliminacaoSimples(int $categoriaId, array $inscritos): void
    {
        $ordem = 1;
        // shuffle para sortear
        shuffle($inscritos);
        $fila = array_column($inscritos, 'atleta_id');

        // enquanto sobrar + de 1 cria lutas
        while (count($fila) > 1) {
            $a = array_shift($fila);
            $b = array_shift($fila);
            LutaRepository::create([
                'categoria_id' => $categoriaId,
                'fase' => 'eliminacao',
                'ordem' => $ordem++,
                'atleta_a_id' => $a,
                'atleta_b_id' => $b
            ]);
        }
    }

    private static function gerarChaveDeTres(int $categoriaId, array $inscritos): void
    {
        shuffle($inscritos);
        [$a, $b, $c] = $inscritos;

        // Luta 1: A x B
        $l1 = LutaRepository::create([
            'categoria_id' => $categoriaId,
            'fase' => 'chave3',
            'ordem' => 1,
            'atleta_a_id' => $a['atleta_id'],
            'atleta_b_id' => $b['atleta_id']
        ]);

        // Luta 2: Perdedor L1 x C
        $l2 = LutaRepository::create([
            'categoria_id' => $categoriaId,
            'fase' => 'chave3',
            'ordem' => 2,
            'atleta_a_id' => null, // perdedor de L1
            'atleta_b_id' => $c['atleta_id']
        ]);

        // Final: Vencedor L1 x Vencedor L2
        $final = LutaRepository::create([
            'categoria_id' => $categoriaId,
            'fase' => 'final',
            'ordem' => 3,
            'atleta_a_id' => null,
            'atleta_b_id' => null
        ]);

        // vincula próximas lutas
        $pdo = \App\Repositories\Db::pdo();
        $st = $pdo->prepare("UPDATE lutas SET proxima_luta_id=? WHERE id IN (?,?)");
        $st->execute([$final, $l1, $l2]);
    }
}
