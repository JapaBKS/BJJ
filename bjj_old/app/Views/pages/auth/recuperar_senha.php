<?php require_once "../../layouts/header.php"; ?>

<div class="auth-container">
    <h2>Recuperar Senha</h2>
    <form action="/recuperar-senha" method="POST" class="auth-form">
        <label for="email">Informe seu e-mail</label>
        <input type="email" name="email" id="email" required placeholder="seu@email.com">

        <button type="submit" class="btn-primary">Enviar link de recuperação</button>
    </form>
</div>

<?php require_once "../../layouts/footer.php"; ?>
