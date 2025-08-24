<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Ranking de Academias – Competição #<?= (int)$competicao_id ?></h1>

    <?php if (!$ranking): ?>
        <p>Nenhum resultado encontrado para esta competição.</p>
    <?php else: ?>
        <table border="1" cellpadding="6">
            <tr>
                <th>Pos</th>
                <th>Academia</th>
                <th>Pontos</th>
                <th>🥇</th>
                <th>🥈</th>
                <th>🥉</th>
            </tr>
            <?php $pos = 1;
            foreach ($ranking as $r): ?>
                <tr>
                    <td><?= $pos++ ?></td>
                    <td><?= ($r['academia'] ?? '—') ?></td>
                    <td><?= (int)$r['pontos'] ?></td>
                    <td><?= (int)$r['ouros'] ?></td>
                    <td><?= (int)$r['pratas'] ?></td>
                    <td><?= (int)$r['bronzes'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</section>