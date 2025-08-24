<?php require_once "../../layouts/header.php"; ?>

<div class="profile-container">
    <div class="profile-header">
        <h2><?= $atleta->nome ?></h2>
        <p>Academia: <?= $atleta->academia_nome ?></p>
        <p>Faixa: <?= ucfirst($atleta->faixa) ?> | Peso: <?= $atleta->peso ?> kg</p>
    </div>

    <div class="profile-tabs">
        <button class="tab-btn active" data-tab="historico">Histórico</button>
        <button class="tab-btn" data-tab="medalhas">Medalhas</button>
    </div>

    <div class="tab-content active" id="historico">
        <table>
            <thead>
                <tr>
                    <th>Competição</th>
                    <th>Categoria</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historico as $h): ?>
                    <tr>
                        <td><?= $h->competicao ?></td>
                        <td><?= $h->categoria ?></td>
                        <td><?= $h->medalha ?? '-' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="tab-content" id="medalhas">
        <?php foreach ($medalhas as $m): ?>
            <div class="medalha-card">
                <p><?= ucfirst($m->medalha) ?> - <?= $m->competicao ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(btn.dataset.tab).classList.add('active');
        });
    });
</script>

<?php require_once "../../layouts/footer.php"; ?>