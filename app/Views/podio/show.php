<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Pódio da categoria</h1>

    <?php if (!empty($erro)): ?>
        <p style="color:#f87171"><?= ($erro) ?></p>
    <?php elseif (!$podio): ?>
        <p>Nenhum pódio encontrado. Gere após finalizar a <strong>final</strong>.</p>
    <?php else:
        $n = $podio['nomes'] ?? [];
        $nome = fn($id) => $id ? ($n[$id] ?? ('#' . $id)) : '-';
    ?>
        <table border="1" cellpadding="6">
            <tr>
                <th>Colocação</th>
                <th>Atleta</th>
            </tr>
            <tr>
                <td>🥇 Ouro</td>
                <td><?= $nome($podio['ouro_atleta_id']) ?></td>
            </tr>
            <tr>
                <td>🥈 Prata</td>
                <td><?= $nome($podio['prata_atleta_id']) ?></td>
            </tr>
            <tr>
                <td>🥉 Bronze 1</td>
                <td><?= $nome($podio['bronze1_atleta_id']) ?></td>
            </tr>
            <tr>
                <td>🥉 Bronze 2</td>
                <td><?= $nome($podio['bronze2_atleta_id']) ?></td>
            </tr>
        </table>
    <?php endif; ?>

    <div style="margin-top:14px">
        <a href="<?= $baseUrl ?>/">Voltar</a>
    </div>
</section>