<?php require_once "../../layouts/header.php"; ?>

<div class="table-container">
    <h2>Validar Inscrições</h2>
    <table>
        <thead>
            <tr>
                <th>Atleta</th>
                <th>Categoria</th>
                <th>Faixa / Peso / Idade</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscricoes as $i): ?>
                <tr>
                    <td><?= $i->atleta_nome ?></td>
                    <td><?= ucfirst($i->faixa) ?> - <?= $i->peso_min ?>-<?= $i->peso_max ?> kg</td>
                    <td><?= $i->faixa_atleta ?> / <?= $i->peso ?> kg / <?= $i->idade ?> anos</td>
                    <td><?= ucfirst($i->status) ?></td>
                    <td>
                        <?php if ($i->status === 'pendente'): ?>
                            <a href="/inscricoes/validar/<?= $i->id ?>/aprovar" class="btn-primary">Aprovar</a>
                            <a href="/inscricoes/validar/<?= $i->id ?>/rejeitar" class="btn-danger">Rejeitar</a>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>