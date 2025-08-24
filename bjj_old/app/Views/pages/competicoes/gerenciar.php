<?php require_once "../../layouts/header.php"; ?>

<div class="table-container">
    <h2>Gerenciar Competições</h2>
    <a href="/competicoes/criar" class="btn-primary">Nova Competição</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Local</th>
                <th>Data</th>
                <th>Modalidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competicoes as $c): ?>
                <tr>
                    <td><?= $c->nome ?></td>
                    <td><?= $c->local ?></td>
                    <td><?= $c->data ?></td>
                    <td><?= ucfirst($c->modalidade) ?></td>
                    <td>
                        <a href="/competicoes/editar/<?= $c->id ?>" class="btn-secondary">Editar</a>
                        <a href="/competicoes/inscricoes/<?= $c->id ?>" class="btn-primary">Inscrições</a>
                        <a href="/competicoes/chaveamento/<?= $c->id ?>" class="btn-secondary">Chaveamento</a>
                        <a href="/competicoes/deletar/<?= $c->id ?>" class="btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>