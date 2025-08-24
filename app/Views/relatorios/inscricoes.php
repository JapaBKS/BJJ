<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Inscrições por Categoria – Competição #<?= (int)$competicao_id ?></h1>
    <table border="1" cellpadding="6">
        <tr>
            <th>Categoria</th>
            <th>Inscritos</th>
            <th>Aprovadas</th>
            <th>Reprovadas</th>
        </tr>
        <?php foreach ($linhas as $l): ?>
            <tr>
                <td>#<?= (int)$l['categoria_id'] ?> – <?= e($l['categoria']) ?></td>
                <td><?= (int)$l['inscritos'] ?></td>
                <td><?= (int)$l['aprovadas'] ?></td>
                <td><?= (int)$l['reprovadas'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>