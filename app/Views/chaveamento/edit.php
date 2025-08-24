<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Editar Luta #<?= (int)$luta['id'] ?> (Categoria #<?= (int)$luta['categoria_id'] ?>)</h1>

    <form method="post" action="<?= $baseUrl ?>/chaveamentos/luta/<?= (int)$luta['id'] ?>/edit">
        <label>Atleta A (ID)</label>
        <input name="atleta_a_id" type="number" value="<?= ($luta['atleta_a_id'] ?? '') ?>">

        <label>Atleta B (ID)</label>
        <input name="atleta_b_id" type="number" value="<?= ($luta['atleta_b_id'] ?? '') ?>">

        <label>Próxima Luta (ID, opcional)</label>
        <input name="proxima_luta_id" type="number" value="<?= ($luta['proxima_luta_id'] ?? '') ?>">

        <label><input type="checkbox" name="clear_winner"> Limpar vencedor desta luta (e remover da próxima, se aplicável)</label>

        <button type="submit">Salvar</button>
        <a href="<?= $baseUrl ?>/chaveamentos/<?= (int)$luta['categoria_id'] ?>">Cancelar</a>
    </form>

    <h3 style="margin-top:14px;">Atletas aprovados na categoria</h3>
    <?php if (!$aprovados): ?>
        <p>Nenhum aprovado encontrado.</p>
    <?php else: ?>
        <table border="1" cellpadding="6">
            <tr>
                <th>Inscrição</th>
                <th>Atleta ID</th>
                <th>Nome</th>
                <th>Faixa</th>
                <th>Peso</th>
            </tr>
            <?php foreach ($aprovados as $a): ?>
                <tr>
                    <td>#<?= (int)$a['inscricao_id'] ?></td>
                    <td><?= (int)$a['atleta_id'] ?></td>
                    <td><?= ($a['nome']) ?></td>
                    <td><?= ($a['faixa']) ?></td>
                    <td><?= ($a['peso_kg']) ?> kg</td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</section>