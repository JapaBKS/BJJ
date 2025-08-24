<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Resultados por Atleta – Competição #<?= (int)$competicao_id ?></h1>
    <table border="1" cellpadding="6">
        <tr>
            <th>Categoria</th>
            <th>Atleta</th>
            <th>Academia</th>
            <th>Medalha</th>
        </tr>
        <?php foreach ($linhas as $l): ?>
            <tr>
                <td>#<?= (int)$l['categoria_id'] ?></td>
                <td><?= ($l['atleta']) ?> (<?= (int)$l['atleta_id'] ?>)</td>
                <td><?= ($l['academia'] ?? '—') ?></td>
                <td><?= ($l['colocacao']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>