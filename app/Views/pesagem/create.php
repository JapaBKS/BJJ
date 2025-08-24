<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Registrar Pesagem</h1>
    <form method="post" action="<?= $baseUrl ?>/pesagens">
        <label>ID da Inscrição</label><input name="inscricao_id" type="number" required>
        <label>Peso oficial (kg)</label><input name="peso_oficial" type="number" step="0.01" required>
        <label><input type="checkbox" name="uniforme_ok"> Uniforme conforme regras</label>
        <label>Observações</label><input name="observacoes">
        <button type="submit">Salvar</button>
    </form>
</section>