<section class="container">
    <h1>Resultado da Inscrição</h1>
    <p><?= ($res['msg']) ?></p>
    <?php if (isset($res['inscricao_id'])): ?>
        <p>Inscrição #<?= (int)$res['inscricao_id'] ?></p>
    <?php endif; ?>
</section>