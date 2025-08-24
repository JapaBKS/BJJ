<?php require_once "../../layouts/header.php"; ?>

<div class="auth-container">
    <h2>Login</h2>
    <form action="/login" method="POST" class="auth-form">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required placeholder="seu@email.com">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required placeholder="********">

        <button type="submit" class="btn-primary">Entrar</button>
        <p class="text-center">
            <a href="/register">Criar conta</a> | 
            <a href="/recuperar-senha">Esqueci a senha</a>
        </p>
    </form>
</div>

<?php require_once "../../layouts/footer.php"; ?>
