<section class="container">
    <h1>Resultado da Pesagem</h1>
    <p><?= ($res['msg']) ?></p>
    <?php if (isset($res['pesagem_id'])): ?>
        <p>Registro #<?= (int)$res['pesagem_id'] ?></p>
    <?php endif; ?>
</section>