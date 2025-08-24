<?php $baseUrl = $GLOBALS['__baseUrl'] ?? ''; ?>
<section class="container">
    <h1>Cadastrar Atleta</h1>
    <form method="post" action="<?= $baseUrl ?>/atletas">
        <label>Nome</label><input name="nome" required>
        <label>E-mail</label><input name="email" type="email">
        <label>Data de Nascimento</label><input name="data_nascimento" type="date" required>
        <label>Peso (kg)</label><input name="peso_kg" type="number" step="0.01" required>
        <label>Faixa</label>
        <select name="faixa" required>
            <option>branca</option>
            <option>azul</option>
            <option>roxa</option>
            <option>marrom</option>
            <option>preta</option>
        </select>
        <label>ID da Academia (opcional)</label><input name="academia_id" type="number">
        <button type="submit">Salvar e ir para Inscrição</button>
    </form>
</section>