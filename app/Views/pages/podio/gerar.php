<?php require_once "../../layouts/header.php"; ?>

<div class="table-container">
    <h2>Pódio - <?= $competicao->nome ?></h2>
    <table>
        <thead>
            <tr>
                <th>Colocação</th>
                <th>Atleta</th>
                <th>Academia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($podio as $pos => $p): ?>
                <tr>
                    <td><?= $pos + 1 ?>º</td>
                    <td><?= $p->atleta ?></td>
                    <td><?= $p->academia ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>