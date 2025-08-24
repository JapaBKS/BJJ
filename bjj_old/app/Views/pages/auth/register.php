<?php require_once "../../layouts/header.php"; ?>

<div class="auth-container">
    <h2>Cadastro de Usuário</h2>
    <form action="/register" method="POST" class="auth-form">
        <!-- Passo 1: Dados pessoais -->
        <label for="nome">Nome completo</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>

        <label for="perfil">Perfil</label>
        <select name="perfil" id="perfil" required>
            <option value="atleta">Atleta</option>
            <option value="professor">Professor</option>
            <option value="administrador">Administrador</option>
            <option value="mesario">Mesário</option>
            <option value="chamador">Chamador</option>
        </select>

        <!-- Passo 2: Dados físicos (se atleta) -->
        <label for="peso">Peso (kg)</label>
        <input type="number" step="0.1" name="peso" id="peso">

        <label for="faixa">Faixa</label>
        <select name="faixa" id="faixa">
            <option value="">Selecione</option>
            <option value="branca">Branca</option>
            <option value="azul">Azul</option>
            <option value="roxa">Roxa</option>
            <option value="marrom">Marrom</option>
            <option value="preta">Preta</option>
        </select>

        <button type="submit" class="btn-primary">Cadastrar</button>
    </form>
</div>

<?php require_once "../../layouts/footer.php"; ?>
