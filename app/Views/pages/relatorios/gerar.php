<?php require_once "../../layouts/header.php"; ?>

<div class="form-container">
    <h2>Gerar Relatório</h2>
    <form action="/relatorios/gerar" method="POST" class="main-form">
        <label for="competicao">Competição</label>
        <select name="competicao_id" id="competicao" required>
            <?php foreach ($competicoes as $c): ?>
                <option value="<?= $c->id ?>"><?= $c->nome ?> - <?= $c->data ?></option>
            <?php endforeach; ?>
        </select>

        <label for="tipo">Tipo de relatório</label>
        <select name="tipo" id="tipo" required>
            <option value="atletas">Desempenho de Atletas</option>
            <option value="academias">Desempenho das Academias</option>
            <option value="categorias">Número de inscritos por categoria</option>
        </select>

        <button type="submit" class="btn-primary">Gerar Relatório</button>
    </form>

    <?php if (isset($relatorio)): ?>
        <h3>Resultados</h3>
        <table>
            <thead>
                <tr>
                    <?php foreach (array_keys((array)$relatorio[0]) as $col): ?>
                        <th><?= ucfirst($col) ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relatorio as $linha): ?>
                    <tr>
                        <?php foreach ($linha as $valor): ?>
                            <td><?= $valor ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php require_once "../../layouts/footer.php"; ?>