<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Nova Inscrição</h1>
    <?php if ($atleta): ?>
        <p><strong>Atleta:</strong> <?= ($atleta['nome']) ?> — <?= ($atleta['faixa']) ?> — <?= ($atleta['peso_kg']) ?> kg</p>
    <?php else: ?>
        <p>Cadastre um atleta primeiro em <a href="<?= $baseUrl ?>/atletas/create">Atletas › Cadastrar</a>.</p>
    <?php endif; ?>

    <form method="post" action="<?= $baseUrl ?>/inscricoes">
        <input type="hidden" name="atleta_id" value="<?= $atleta ? (int)$atleta['id'] : 0 ?>">
        <label>Categoria</label>
        <select name="categoria_id" required>
            <?php foreach ($categorias as $c): ?>
                <option value="<?= (int)$c['id'] ?>">
                    <?= ($c['nome']) ?> — Faixa <?= ($c['faixa_min']) ?> a <?= ($c['faixa_max']) ?> — Idade <?= (int)$c['idade_min'] ?>–<?= (int)$c['idade_max'] ?> — Peso <?= ($c['peso_min']) ?>–<?= ($c['peso_max']) ?> kg
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Inscrever</button>
    </form>
</section>