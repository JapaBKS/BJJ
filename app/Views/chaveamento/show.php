<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Chaveamento da categoria #<?= isset($lutas[0]) ? (int)$lutas[0]['categoria_id'] : '' ?></h1>
    <?php if (!$lutas): ?>
        <p>Nenhuma luta encontrada.</p>
    <?php else: ?>
        <table border="1" cellpadding="6">
            <tr>
                <th>#</th>
                <th>Fase</th>
                <th>Atleta A</th>
                <th>Atleta B</th>
                <th>Vencedor</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($lutas as $l): ?>
                <tr>
                    <td><?= (int)$l['ordem'] ?></td>
                    <td><?= ($l['fase']) ?></td>
                    <td><?= ($l['atleta_a_nome'] ?? ('#' . ($l['atleta_a_id'] ?? '-'))) ?></td>
                    <td><?= ($l['atleta_b_nome'] ?? ('#' . ($l['atleta_b_id'] ?? '-'))) ?></td>
                    <td><?= ($l['vencedor_nome'] ?? '-') ?></td>
                    <td>
                        <a href="<?= $baseUrl ?>/mesa/<?= (int)$l['id'] ?>">Abrir mesa</a>
                        &nbsp;|&nbsp;
                        <a href="<?= $baseUrl ?>/chaveamentos/luta/<?= (int)$l['id'] ?>/edit">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</section>