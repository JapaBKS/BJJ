<?php require_once "../../layouts/header.php"; ?>

<div class="form-container">
    <h2>Inscrever Atleta</h2>
    <form action="/inscricoes/criar" method="POST" class="main-form">
        <label for="atleta">Atleta</label>
        <select name="atleta_id" id="atleta" required>
            <?php foreach ($atletas as $a): ?>
                <option value="<?= $a->id ?>"><?= $a->nome ?> (<?= $a->academia_nome ?>)</option>
            <?php endforeach; ?>
        </select>

        <label for="categoria">Categoria</label>
        <select name="categoria_id" id="categoria" required>
            <?php foreach ($categorias as $c): ?>
                <option value="<?= $c->id ?>"><?= ucfirst($c->faixa) ?> - <?= $c->peso_min ?>-<?= $c->peso_max ?>kg</option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="btn-primary">Inscrever</button>
    </form>
</div>

<?php require_once "../../layouts/footer.php"; ?>