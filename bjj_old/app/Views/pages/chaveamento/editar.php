<?php require_once "../../layouts/header.php"; ?>

<div class="chaveamento-container">
    <h2>Editar Chaveamento - <?= $competicao->nome ?></h2>
    <form action="/chaveamento/editar" method="POST" class="main-form">
        <?php foreach ($lutas as $luta): ?>
            <div class="luta-edit">
                <p><?= $luta->atleta1 ?> vs <?= $luta->atleta2 ?></p>
                <label>Vencedor:</label>
                <select name="vencedor[<?= $luta->id ?>]">
                    <option value="">-</option>
                    <option value="<?= $luta->atleta1 ?>" <?= $luta->vencedor == $luta->atleta1 ? 'selected' : '' ?>><?= $luta->atleta1 ?></option>
                    <option value="<?= $luta->atleta2 ?>" <?= $luta->vencedor == $luta->atleta2 ? 'selected' : '' ?>><?= $luta->atleta2 ?></option>
                </select>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn-primary">Salvar alterações</button>
    </form>
</div>

<?php require_once "../../layouts/footer.php"; ?>