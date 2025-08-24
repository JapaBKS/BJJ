<?php

namespace App\Services;

use App\Repositories\{AtletaRepository, CategoriaRepository, InscricaoRepository};

final class InscricaoService
{
    private static function idadeEmAnos(string $dataNasc): int
    {
        $dn = new \DateTime($dataNasc);
        $agora = new \DateTime('today');
        return (int)$dn->diff($agora)->y;
    }

    private static function faixaOrdem(string $faixa): int
    {
        return array_search($faixa, ['branca', 'azul', 'roxa', 'marrom', 'preta']);
    }

    public static function validarElegibilidade(array $atleta, array $categoria): array
    {
        $erros = [];

        // idade
        $idade = self::idadeEmAnos($atleta['data_nascimento']);
        if ($idade < (int)$categoria['idade_min'] || $idade > (int)$categoria['idade_max']) {
            $erros[] = "Idade fora do intervalo ({$categoria['idade_min']}–{$categoria['idade_max']}).";
        }

        // peso
        $peso = (float)$atleta['peso_kg'];
        if ($peso < (float)$categoria['peso_min'] || $peso > (float)$categoria['peso_max']) {
            $erros[] = "Peso fora do intervalo ({$categoria['peso_min']}–{$categoria['peso_max']} kg).";
        }

        // faixa (ordem)
        $faixaAtleta = self::faixaOrdem($atleta['faixa']);
        $faixaMin = self::faixaOrdem($categoria['faixa_min']);
        $faixaMax = self::faixaOrdem($categoria['faixa_max']);
        if ($faixaAtleta === false || $faixaAtleta < $faixaMin || $faixaAtleta > $faixaMax) {
            $erros[] = "Faixa incompatível (permitido de {$categoria['faixa_min']} a {$categoria['faixa_max']}).";
        }

        return $erros;
    }

    public static function inscrever(int $atletaId, int $categoriaId): array
    {
        $atleta = AtletaRepository::find($atletaId);
        $categoria = CategoriaRepository::find($categoriaId);
        if (!$atleta || !$categoria) return ['ok' => false, 'msg' => 'Atleta ou categoria inexistente.'];

        if (InscricaoRepository::byAtletaCategoria($atletaId, $categoriaId)) {
            return ['ok' => false, 'msg' => 'Atleta já inscrito nesta categoria.'];
        }

        $erros = self::validarElegibilidade($atleta, $categoria);
        if ($erros) {
            $id = InscricaoRepository::create($atletaId, $categoriaId, 'reprovada', implode(' ', $erros));
            return ['ok' => false, 'inscricao_id' => $id, 'msg' => implode(' ', $erros)];
        }

        $id = InscricaoRepository::create($atletaId, $categoriaId, 'aprovada', null);
        return ['ok' => true, 'inscricao_id' => $id, 'msg' => 'Inscrição aprovada.'];
    }
}
