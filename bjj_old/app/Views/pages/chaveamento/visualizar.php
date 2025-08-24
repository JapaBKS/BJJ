<?php require_once "../../layouts/header.php"; ?>

<div class="chaveamento-container">
    <h2>Chaveamento - <?= $competicao->nome ?></h2>
    <div class="tournament-bracket">
        <?php foreach ($lutas as $fase => $lutasFase): ?>
            <div class="fase">
                <h3><?= ucfirst($fase) ?></h3>
                <?php foreach ($lutasFase as $luta): ?>
                    <div class="luta-card <?= $luta->vencedor ? 'vencedor' : '' ?>">
                        <p><?= $luta->atleta1 ?> vs <?= $luta->atleta2 ?></p>
                        <p>Resultado: <?= $luta->resultado ?? '-' ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once "../../layouts/footer.php"; ?>