<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Painel de Lutas — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Painel/painel.css">
</head>

<body>
    <div class="page">
        <header class="panel-header">
            <h1>Painel de Lutas</h1>
            <p class="subtitle">Luta atual e próximas chamadas</p>
        </header>

        <main class="panel-main">
            <section class="fight-now">
                <h2>Luta Atual</h2>
                <div class="fight-card current">
                    <div class="fighter red">
                        <h3>João Silva</h3>
                        <p>Academia Gracie</p>
                    </div>
                    <span class="vs">VS</span>
                    <div class="fighter blue">
                        <h3>Carlos Souza</h3>
                        <p>Academia Nova União</p>
                    </div>
                </div>
            </section>

            <section class="fight-next">
                <h2>Próximas Lutas</h2>
                <ul class="fight-list">
                    <li>
                        <span class="red">Pedro Lima (Checkmat)</span>
                        <span class="vs">vs</span>
                        <span class="blue">Rafael Alves (Alliance)</span>
                    </li>
                    <li>
                        <span class="red">Lucas Martins (Atos)</span>
                        <span class="vs">vs</span>
                        <span class="blue">Bruno Costa (Gracie Barra)</span>
                    </li>
                    <li>
                        <span class="red">André Dias (GFTeam)</span>
                        <span class="vs">vs</span>
                        <span class="blue">Marcos Souza (Nova União)</span>
                    </li>
                </ul>
            </section>
        </main>

        <footer class="panel-footer">
            <small>© <span id="year"></span> ShiaiFlow</small>
        </footer>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>