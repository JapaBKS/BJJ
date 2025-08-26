<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>ShiaiFlow — Navegação das Telas</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/index.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>ShiaiFlow — Navegação</h1>
                <p class="subtitle">Atalhos para as 15 telas do protótipo</p>
            </div>
            <div class="actions">
                <a class="btn ghost" href="/BJJ/painel">Ir para o Painel</a>
            </div>
        </header>

        <main class="page-main">
            <!-- Busca -->
            <section class="filters" aria-label="Busca">
                <div class="field">
                    <label for="q">Filtrar</label>
                    <input id="q" type="search" placeholder="Digite parte do nome da tela…" oninput="filterCards(this.value)">
                </div>
            </section>

            <!-- Cards -->
            <section class="grid" id="cards">
                <!-- 1 -->
                <a class="card" data-title="login autenticação" href="/BJJ/login">
                    <div class="kicker">Tela 1</div>
                    <h2>Login / Autenticação</h2>
                    <p>Formulário de acesso</p>
                    <span class="pill">/login</span>
                </a>

                <!-- 2 -->
                <a class="card" data-title="painel dashboard home" href="/BJJ/painel">
                    <div class="kicker">Tela 2</div>
                    <h2>Painel</h2>
                    <p>Resumo geral do evento</p>
                    <span class="pill">/painel</span>
                </a>

                <!-- 3 -->
                <a class="card" data-title="mesario placar area cronômetro" href="/BJJ/mesario">
                    <div class="kicker">Tela 3</div>
                    <h2>Interface do Mesário</h2>
                    <p>Controle de luta e placar</p>
                    <span class="pill">/mesario</span>
                </a>

                <!-- 4 -->
                <a class="card" data-title="competições eventos lista" href="/BJJ/competicoes">
                    <div class="kicker">Tela 4</div>
                    <h2>Gestão de Competições</h2>
                    <p>Lista de eventos</p>
                    <span class="pill">/competicoes</span>
                </a>

                <!-- 5 -->
                <a class="card" data-title="categorias idades pesos faixas" href="/BJJ/categorias">
                    <div class="kicker">Tela 5</div>
                    <h2>Categorias (dentro da competição)</h2>
                    <p>Gerenciamento de categorias</p>
                    <span class="pill">/categorias</span>
                </a>

                <!-- 6 -->
                <a class="card" data-title="inscrição atletas wizard cadastro" href="/BJJ/inscricao">
                    <div class="kicker">Tela 6</div>
                    <h2>Inscrição de Atletas</h2>
                    <p>Passo a passo</p>
                    <span class="pill">/inscricao</span>
                </a>

                <!-- 7 -->
                <a class="card" data-title="academias professores gestão" href="/BJJ/academias">
                    <div class="kicker">Tela 7</div>
                    <h2>Gestão de Academias</h2>
                    <p>Lista e ações</p>
                    <span class="pill">/academias</span>
                </a>

                <!-- 8 -->
                <a class="card" data-title="perfil atleta dados histórico" href="/BJJ/perfil">
                    <div class="kicker">Tela 8</div>
                    <h2>Perfil do Atleta</h2>
                    <p>Dados e indicadores</p>
                    <span class="pill">/perfil</span>
                </a>

                <!-- 9 -->
                <a class="card" data-title="chaveamento bracket eliminação simples" href="/BJJ/chaveamento">
                    <div class="kicker">Tela 9</div>
                    <h2>Visualização de Chaveamento</h2>
                    <p>Bracket estático</p>
                    <span class="pill">/chaveamento</span>
                </a>

                <!-- 10 -->
                <a class="card" data-title="pesagem uniforme conferência kimono" href="/BJJ/pesagem">
                    <div class="kicker">Tela 10</div>
                    <h2>Pesagem e Uniforme</h2>
                    <p>Checagem de peso e kimono</p>
                    <span class="pill">/pesagem</span>
                </a>

                <!-- 11 -->
                <a class="card" data-title="luta detalhe resultado pontos finalização dq" href="/BJJ/luta">
                    <div class="kicker">Tela 11</div>
                    <h2>Detalhe de Luta / Resultado</h2>
                    <p>Resumo + formulário</p>
                    <span class="pill">/luta</span>
                </a>

                <!-- 12 -->
                <a class="card" data-title="ranking academias pontuação pódios" href="/BJJ/ranking">
                    <div class="kicker">Tela 12</div>
                    <h2>Ranking de Academias</h2>
                    <p>9/3/1 + critérios</p>
                    <span class="pill">/ranking</span>
                </a>

                <!-- 13 -->
                <a class="card" data-title="relatórios exportar estatísticas receita" href="/BJJ/relatorios">
                    <div class="kicker">Tela 13</div>
                    <h2>Relatórios</h2>
                    <p>KPIs e tabelas</p>
                    <span class="pill">/relatorios</span>
                </a>

                <!-- 14 -->
                <a class="card" data-title="notificações avisos chamadas" href="/BJJ/notificacoes">
                    <div class="kicker">Tela 14</div>
                    <h2>Notificações / Avisos</h2>
                    <p>Envio e agendamento</p>
                    <span class="pill">/notificacoes</span>
                </a>

                <!-- 15 -->
                <a class="card" data-title="histórico lutas atleta lista" href="/BJJ/historico">
                    <div class="kicker">Tela 15</div>
                    <h2>Histórico de Lutas do Atleta</h2>
                    <p>Lista completa + filtros</p>
                    <span class="pill">/historico</span>
                </a>
            </section>
        </main>

        <footer class="page-footer">
            <small>© <span id="year"></span> ShiaiFlow</small>
        </footer>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();

        function filterCards(q) {
            q = (q || '').toLowerCase();
            document.querySelectorAll('#cards .card').forEach(c => {
                const t = c.dataset.title + ' ' + c.querySelector('h2').textContent.toLowerCase();
                c.style.display = t.includes(q) ? '' : 'none';
            });
        }
    </script>
</body>

</html>