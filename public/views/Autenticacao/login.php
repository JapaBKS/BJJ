<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Login — ShiaiFlow</title>

    <!-- CSS base do projeto -->
    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <!-- CSS específico da tela -->
    <link rel="stylesheet" href="/BJJ/public/css/Autenticacao/login.css">

</head>

<body>
    <div class="page">
        <header class="auth-header">
            <div class="brand">
                <span class="brand-mark">Shiai</span><span class="brand-accent">Flow</span>
            </div>
            <p class="brand-subtitle">Gestão moderna de campeonatos de Jiu‑Jitsu</p>
        </header>

        <main class="auth-main">
            <section class="auth-card" aria-labelledby="legend-login">
                <h1 id="legend-login" class="visually-hidden">Acesso ao sistema</h1>

                <div class="auth-card__left">
                    <h2 class="auth-title">Entrar</h2>
                    <form class="auth-form" action="#" method="post" novalidate>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="email" placeholder="seuemail@exemplo.com" required>
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input id="senha" name="senha" type="password" placeholder="••••••••" required>
                            <a class="link-inline" href="#">Esqueci minha senha</a>
                        </div>

                        <button class="btn btn-primary" type="submit">Acessar</button>

                        <p class="auth-meta">
                            Não tem conta?
                            <a href="#" class="link-inline">Criar conta</a>
                        </p>
                    </form>
                </div>

                <div class="auth-card__right">
                    <div class="hero">
                        <h3>Organize. Conduza. Vença.</h3>
                        <ul>
                            <li>Inscrições e categorias por faixa, peso e idade</li>
                            <li>Chaveamento automático e regra especial para “chave de 3”</li>
                            <li>Placar em tempo real para o mesário</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>

        <footer class="auth-footer">
            <small>© <span id="year"></span> ShiaiFlow — Todos os direitos reservados.</small>
        </footer>
    </div>

    <script>
        // só para o ano no rodapé, sem dependências
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>