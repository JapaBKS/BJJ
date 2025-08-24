<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Perfil do Atleta</h1>

    <h3><?= ($atleta['nome']) ?></h3>
    <p>
        <strong>Faixa:</strong> <?= ($atleta['faixa']) ?> |
        <strong>Peso:</strong> <?= ($atleta['peso_kg']) ?> kg |
        <strong>Nascimento:</strong> <?= ($atleta['data_nascimento']) ?> |
        <strong>Academia ID:</strong> <?= ($atleta['academia_id'] ?? '—') ?>
    </p>

    <h4>Medalhas</h4>
    <p>🥇 <?= (int)$medalhas['ouro'] ?> &nbsp; 🥈 <?= (int)$medalhas['prata'] ?> &nbsp; 🥉 <?= (int)$medalhas['bronze'] ?></p>

    <h4>Resultados por Competição</h4>
    <?php if (!$resultados): ?>
        <p>Sem resultados cadastrados.</p>
    <?php else: ?>
        <table border="1" cellpadding="6">
            <tr>
                <th>Competição</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Medalha</th>
            </tr>
            <?php foreach ($resultados as $r): ?>
                <tr>
                    <td>#<?= (int)$r['competicao_id'] ?> – <?= ($r['competicao']) ?></td>
                    <td><?= ($r['data_comp']) ?></td>
                    <td>#<?= (int)$r['categoria_id'] ?> – <?= ($r['categoria']) ?></td>
                    <td><?= ($r['colocacao']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <h4>Histórico de Lutas</h4>
    <?php if (!$lutas): ?>
        <p>Este atleta ainda não tem lutas registradas.</p>
    <?php else: ?>
        <table border="1" cellpadding="6">
            <tr>
                <th>Categoria</th>
                <th># Ordem</th>
                <th>Fase</th>
                <th>Adversário (ID)</th>
                <th>Resultado</th>
            </tr>
            <?php foreach ($lutas as $l):
                $op = ($l['atleta_a_id'] == $atleta['id']) ? (int)$l['atleta_b_id'] : (int)$l['atleta_a_id'];
            ?>
                <tr>
                    <td><?= (int)$l['categoria_id'] ?></td>
                    <td><?= (int)$l['ordem'] ?></td>
                    <td><?= ($l['fase']) ?></td>
                    <td><?= $op ?: '—' ?></td>
                    <td><?= ($l['resultado']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div style="margin-top:12px;">
        <a href="<?= $baseUrl ?>/">Voltar</a>
    </div>
</section>