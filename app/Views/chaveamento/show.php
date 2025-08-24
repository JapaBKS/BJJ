<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Chaveamento</h1>
    <table border="1" cellpadding="6">
        <tr>
            <th>#</th>
            <th>Fase</th>
            <th>Atleta A</th>
            <th>Atleta B</th>
            <th>Vencedor</th>
        </tr>
        <?php foreach ($lutas as $l): ?>
            <tr>
                <td><?= ($l['ordem']) ?></td>
                <td><?= ($l['fase']) ?></td>
                <td><?= $l['atleta_a_id'] ?></td>
                <td><?= $l['atleta_b_id'] ?></td>
                <td><?= $l['vencedor_id'] ?? '-' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>
<script>
    // Atualiza em tempo real (RF9)
    setInterval(() => {
        fetch("<?= $baseUrl ?>/api/chaveamentos/<?= (int)$_GET['categoria_id'] ?? '' ?>")
            .then(r => r.json()).then(j => {
                console.log("Atualizado", j);
            });
    }, 3000);
</script>