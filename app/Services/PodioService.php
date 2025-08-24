<?php
namespace App\Services;

use App\Repositories\{Db, LutaRepository, PodioRepository, ResultadoRepository};
use PDO;

final class PodioService {

    public static function gerarParaCategoria(int $categoriaId): array {
        $pdo = Db::pdo();

        // 1) acha a final
        $st = $pdo->prepare("SELECT * FROM lutas WHERE categoria_id=? AND fase='final' LIMIT 1");
        $st->execute([$categoriaId]);
        $final = $st->fetch(PDO::FETCH_ASSOC);
        if (!$final || empty($final['vencedor_id']) || empty($final['atleta_a_id']) || empty($final['atleta_b_id'])) {
            return ['ok'=>false,'msg'=>'Final não encontrada ou ainda sem vencedor/participantes.'];
        }

        $ouro  = (int)$final['vencedor_id'];
        $prata = ($ouro === (int)$final['atleta_a_id']) ? (int)$final['atleta_b_id'] : (int)$final['atleta_a_id'];

        // 2) identifica as lutas que alimentam a final (proxima_luta_id = final.id)
        $feeders = $pdo->prepare("SELECT * FROM lutas WHERE categoria_id=? AND proxima_luta_id=? ORDER BY ordem");
        $feeders->execute([$categoriaId, (int)$final['id']]);
        $semis = $feeders->fetchAll(PDO::FETCH_ASSOC);

        // 3) bronze(s): perdedores das lutas que alimentam a final (únicos)
        $bronzes = [];
        foreach ($semis as $l) {
        if (empty($l['atleta_a_id']) || empty($l['atleta_b_id']) || empty($l['vencedor_id'])) continue;
            $loser = ((int)$l['vencedor_id'] === (int)$l['atleta_a_id']) ? (int)$l['atleta_b_id'] : (int)$l['atleta_a_id'];
            $bronzes[$loser] = true; // set único (em chave de 3 pode existir 1 bronze só)
        }
        $bronzeList = array_keys($bronzes);
        $b1 = $bronzeList[0] ?? null;
        $b2 = $bronzeList[1] ?? null;

        // 4) persiste pódio + resultados (limpa antes para poder recalcular)
        PodioRepository::upsert($categoriaId, $ouro, $prata, $b1, $b2);

        // pega competicao_id pela categoria
        $stc = $pdo->prepare("SELECT competicao_id FROM categorias WHERE id=?");
        $stc->execute([$categoriaId]);
        $competicaoId = (int)$stc->fetchColumn();

        ResultadoRepository::clearCategoria($categoriaId);
        ResultadoRepository::add($competicaoId, $categoriaId, $ouro,  'ouro');
        ResultadoRepository::add($competicaoId, $categoriaId, $prata, 'prata');
        if ($b1) ResultadoRepository::add($competicaoId, $categoriaId, $b1, 'bronze');
        if ($b2 && $b2 !== $b1) ResultadoRepository::add($competicaoId, $categoriaId, $b2, 'bronze');

        return ['ok'=>true,'msg'=>'Pódio gerado com sucesso.','ouro'=>$ouro,'prata'=>$prata,'bronzes'=>$bronzeList];
    }

    public static function podioComNomes(int $categoriaId): ?array {
        $pdo = Db::pdo();
        $podio = \App\Repositories\PodioRepository::byCategoria($categoriaId);
        if (!$podio) return null;

        $ids = array_filter([
            $podio['ouro_atleta_id'] ?? null,
            $podio['prata_atleta_id'] ?? null,
            $podio['bronze1_atleta_id'] ?? null,
            $podio['bronze2_atleta_id'] ?? null
        ]);

        if (!$ids) return $podio + ['nomes'=>[]];

        $in  = implode(',', array_fill(0, count($ids), '?'));
        $st  = $pdo->prepare("SELECT id, nome FROM atletas WHERE id IN ($in)");
        $st->execute($ids);
        $map = [];
        foreach ($st->fetchAll(PDO::FETCH_ASSOC) as $r) $map[$r['id']] = $r['nome'];

        return $podio + ['nomes'=>$map];
    }
}
