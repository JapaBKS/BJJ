<?php

namespace App\Services;

use App\Repositories\{InscricaoRepository, CategoriaRepository, AtletaRepository, PesagemRepository};

final class PesagemService
{
    public static function registrar(int $inscricaoId, float $pesoOficial, bool $uniformeOk, ?string $obs = null): array
    {
        $insc = InscricaoRepository::find($inscricaoId);
        if (!$insc) return ['ok' => false, 'msg' => 'Inscrição inexistente.'];

        $atleta = AtletaRepository::find((int)$insc['atleta_id']);
        $categoria = CategoriaRepository::find((int)$insc['categoria_id']);
        if (!$atleta || !$categoria) return ['ok' => false, 'msg' => 'Dados inconsistentes.'];

        // valida peso contra a categoria
        $okPeso = ($pesoOficial >= (float)$categoria['peso_min'] && $pesoOficial <= (float)$categoria['peso_max']);
        $status = ($okPeso && $uniformeOk) ? 'aprovado' : 'reprovado';

        $id = PesagemRepository::create([
            'inscricao_id' => $inscricaoId,
            'peso_oficial' => $pesoOficial,
            'uniforme_ok' => $uniformeOk,
            'status' => $status,
            'observacoes' => $obs
        ]);

        // opcional: refletir status na inscrição
        InscricaoRepository::updateStatus($inscricaoId, $status === 'aprovado' ? 'aprovada' : 'reprovada', $status === 'reprovado' ? 'Falha na pesagem/uniforme.' : null);

        return ['ok' => $status === 'aprovado', 'pesagem_id' => $id, 'msg' => "Pesagem {$status}."];
    }
}
