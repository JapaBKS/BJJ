<?php require_once "../../layouts/header.php"; ?>

<div class="table-container">
    <h2>Ranking de Academias</h2>
    <table>
        <thead>
            <tr>
                <th>Posição</th>
                <th>Academia</th>
                <th>Ouro</th>
                <th>Prata</th>
                <th>Bronze</th>
                <th>Pontos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ranking as $pos => $r): ?>
                <tr>
                    <td><?= $pos + 1 ?></td>
                    <td><?= $r->academia ?></td>
                    <td><?= $r->ouro ?></td>
                    <td><?= $r->prata ?></td>
                    <td><?= $r->bronze ?></td>
                    <td><?= $r->pontos ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>