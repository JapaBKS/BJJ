<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Chaveamento — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Chaveamento/chaveamento.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Chaveamento</h1>
                <p class="subtitle">Open Curitiba 2025 • Adulto • Médio • Azul • Masculino</p>
            </div>
            <div class="actions">
                <a class="btn ghost" href="#">Imprimir</a>
                <a class="btn" href="#">Exportar PDF</a>
            </div>
        </header>

        <main class="page-main">
            <!-- legenda -->
            <section class="legend">
                <span class="tag seed">Cabeça de chave</span>
                <span class="tag win">Vitória</span>
                <span class="tag walkover">WO</span>
                <span class="tag dq">DQ</span>
            </section>

            <!-- BRACKET 8 atletas (mock) -->
            <section class="bracket" aria-label="Chave de 8 atletas, eliminação simples">
                <!-- Round 1 -->
                <div class="round">
                    <h2>Quartas</h2>

                    <div class="match">
                        <div class="slot red">
                            <span class="seed">#1</span>
                            <div class="name">João Silva <em>(Gracie Barra)</em></div>
                            <div class="score">6</div>
                        </div>
                        <div class="slot blue">
                            <div class="name">Pedro Lima <em>(Checkmat)</em></div>
                            <div class="score">2</div>
                        </div>
                        <div class="adv">João Silva</div>
                    </div>

                    <div class="match">
                        <div class="slot red">
                            <div class="name">Lucas Martins <em>(Atos)</em></div>
                            <div class="score">0</div>
                        </div>
                        <div class="slot blue">
                            <div class="name">Rafael Alves <em>(Alliance)</em></div>
                            <div class="score">2</div>
                        </div>
                        <div class="adv">Rafael Alves</div>
                    </div>

                    <div class="match">
                        <div class="slot red">
                            <span class="seed">#2</span>
                            <div class="name">Carlos Souza <em>(Nova União)</em></div>
                            <div class="score">WO</div>
                        </div>
                        <div class="slot blue walkover">
                            <div class="name">—</div>
                            <div class="score">—</div>
                        </div>
                        <div class="adv">Carlos Souza</div>
                    </div>

                    <div class="match">
                        <div class="slot red">
                            <div class="name">Bruno Costa <em>(Gracie Barra)</em></div>
                            <div class="score">DQ</div>
                        </div>
                        <div class="slot blue dq">
                            <div class="name">André Dias <em>(GFTeam)</em></div>
                            <div class="score">—</div>
                        </div>
                        <div class="adv">André Dias</div>
                    </div>
                </div>

                <!-- Round 2 -->
                <div class="round">
                    <h2>Semifinais</h2>

                    <div class="match">
                        <div class="slot red">
                            <div class="name">João Silva</div>
                            <div class="score">7</div>
                        </div>
                        <div class="slot blue">
                            <div class="name">Rafael Alves</div>
                            <div class="score">4</div>
                        </div>
                        <div class="adv">João Silva</div>
                    </div>

                    <div class="match">
                        <div class="slot red">
                            <div class="name">Carlos Souza</div>
                            <div class="score">0</div>
                        </div>
                        <div class="slot blue">
                            <div class="name">André Dias</div>
                            <div class="score">2</div>
                        </div>
                        <div class="adv">André Dias</div>
                    </div>
                </div>

                <!-- Round 3 -->
                <div class="round final">
                    <h2>Final</h2>

                    <div class="match">
                        <div class="slot red">
                            <div class="name">João Silva</div>
                            <div class="score win">V</div>
                        </div>
                        <div class="slot blue">
                            <div class="name">André Dias</div>
                            <div class="score">—</div>
                        </div>
                        <div class="adv">Campeão: João Silva</div>
                    </div>

                    <div class="podium">
                        <div class="pod gold">🥇 João Silva</div>
                        <div class="pod silver">🥈 André Dias</div>
                        <div class="pod bronze">🥉 Rafael Alves e Carlos Souza</div>
                    </div>
                </div>
            </section>

            <!-- Nota sobre chave de 3 -->
            <section class="note-3">
                <h3>Observação: Chave de 3 atletas</h3>
                <p>Quando houver apenas 3 atletas, aplica-se o método especial: o perdedor da primeira luta disputa a semifinal contra o terceiro atleta; o vencedor da semifinal enfrenta o vencedor da primeira luta na final.</p>
            </section>
        </main>

        <footer class="page-footer">
            <small>© <span id="year"></span> ShiaiFlow</small>
        </footer>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>