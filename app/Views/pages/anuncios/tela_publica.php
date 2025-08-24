<?php require_once "../../layouts/header.php"; ?>

<div class="tela-publica">
    <h2>Luta Atual</h2>
    <div class="luta-atual">
        <p><?= $lutaAtual->atleta1 ?> vs <?= $lutaAtual->atleta2 ?></p>
        <p>Categoria: <?= $lutaAtual->categoria ?></p>
        <p>Faixa: <?= ucfirst($lutaAtual->faixa) ?></p>
    </div>

    <h3>Próximas lutas</h3>
    <ul>
        <?php foreach ($proximasLutas as $l): ?>
            <li><?= $l->atleta1 ?> vs <?= $l->atleta2 ?> (<?= $l->categoria ?>)</li>
        <?php endforeach; ?>
    </ul>
</div>

<style>
    .tela-publica {
        max-width: 800px;
        margin: 20px auto;
        background-color: hsl(0, 0%, 15%);
        padding: 20px;
        border-radius: 12px;
        color: hsl(120, 100%, 80%);
        text-align: center;
    }

    .luta-atual {
        background-color: hsl(0, 0%, 25%);
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    ul li {
        padding: 10px;
        border-bottom: 1px solid hsl(0, 0%, 30%);
    }
</style>

<?php require_once "../../layouts/footer.php"; ?>