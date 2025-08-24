<?php require_once "layouts/header.php"; ?>

<div class="dashboard-container">
    <h2>Dashboard - ShiaiFlow</h2>
    <div class="cards">
        <div class="card">
            <h3>Competições Ativas</h3>
            <p><?= $totalCompeticoes ?></p>
        </div>
        <div class="card">
            <h3>Atletas Cadastrados</h3>
            <p><?= $totalAtletas ?></p>
        </div>
        <div class="card">
            <h3>Inscrições</h3>
            <p><?= $totalInscricoes ?></p>
        </div>
        <div class="card">
            <h3>Notificações Pendentes</h3>
            <p><?= $totalNotificacoes ?></p>
        </div>
    </div>

    <h3>Últimas Notificações</h3>
    <ul>
        <?php foreach ($ultimasNotificacoes as $n): ?>
            <li><?= $n->mensagem ?> (<?= $n->data ?>)</li>
        <?php endforeach; ?>
    </ul>
</div>

<style>
    .dashboard-container {
        max-width: 1000px;
        margin: 20px auto;
        color: hsl(120, 100%, 80%);
    }

    .cards {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .card {
        background-color: hsl(0, 0%, 20%);
        padding: 20px;
        border-radius: 12px;
        flex: 1 1 200px;
        text-align: center;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    ul li {
        background-color: hsl(0, 0%, 25%);
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 8px;
    }
</style>

<?php require_once "layouts/footer.php"; ?>