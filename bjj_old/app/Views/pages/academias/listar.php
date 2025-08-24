<?php require_once "../../layouts/header.php"; ?>

<div class="table-container">
    <h2>Academias</h2>
    <a href="/academias/criar" class="btn-primary">Nova Academia</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Professor Responsável</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($academias as $a): ?>
                <tr>
                    <td><?= $a->nome ?></td>
                    <td><?= $a->professor_nome ?></td>
                    <td><?= $a->endereco ?></td>
                    <td>
                        <a href="/academias/editar/<?= $a->id ?>" class="btn-secondary">Editar</a>
                        <a href="/academias/deletar/<?= $a->id ?>" class="btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>