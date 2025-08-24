<?php require_once "../../layouts/header.php"; ?>

<div class="table-container">
    <h2>Notificações</h2>
    <table>
        <thead>
            <tr>
                <th>Mensagem</th>
                <th>Tipo</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notificacoes as $n): ?>
                <tr>
                    <td><?= $n->mensagem ?></td>
                    <td><?= ucfirst($n->tipo) ?></td>
                    <td><?= $n->data ?></td>
                    <td>
                        <a href="/notificacoes/deletar/<?= $n->id ?>" class="btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>