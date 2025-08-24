<?php require_once "../../layouts/header.php"; ?>

<div class="form-container">
    <h2>Definir Categorias - <?= $competicao->nome ?></h2>
    <form action="/competicoes/<?= $competicao->id ?>/categorias/criar" method="POST" class="main-form">
        <label for="faixa">Faixa</label>
        <select name="faixa" id="faixa" required>
            <option value="branca">Branca</option>
            <option value="azul">Azul</option>
            <option value="roxa">Roxa</option>
            <option value="marrom">Marrom</option>
            <option value="preta">Preta</option>
        </select>

        <label for="peso_min">Peso mínimo (kg)</label>
        <input type="number" name="peso_min" id="peso_min" step="0.1" required>

        <label for="peso_max">Peso máximo (kg)</label>
        <input type="number" name="peso_max" id="peso_max" step="0.1" required>

        <label for="idade_min">Idade mínima</label>
        <input type="number" name="idade_min" id="idade_min" required>

        <label for="idade_max">Idade máxima</label>
        <input type="number" name="idade_max" id="idade_max" required>

        <label for="sexo">Sexo</label>
        <select name="sexo" id="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>

        <button type="submit" class="btn-primary">Adicionar Categoria</button>
    </form>

    <h3>Categorias existentes</h3>
    <table>
        <thead>
            <tr>
                <th>Faixa</th>
                <th>Peso</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $cat): ?>
                <tr>
                    <td><?= ucfirst($cat->faixa) ?></td>
                    <td><?= $cat->peso_min ?> - <?= $cat->peso_max ?> kg</td>
                    <td><?= $cat->idade_min ?> - <?= $cat->idade_max ?></td>
                    <td><?= $cat->sexo ?></td>
                    <td>
                        <a href="/competicoes/categorias/editar/<?= $cat->id ?>" class="btn-secondary">Editar</a>
                        <a href="/competicoes/categorias/deletar/<?= $cat->id ?>" class="btn-danger">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>