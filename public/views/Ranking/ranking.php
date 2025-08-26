<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Ranking de Academias — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Ranking/ranking.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Ranking de Academias</h1>
                <p class="subtitle">Pontuação por pódios — critério 9/3/1 (ouro/prata/bronze) e desempate por medalhas (ouro → prata → bronze)</p>
            </div>
            <div class="actions">
                <a class="btn" href="#">Exportar CSV</a>
                <a class="btn ghost" href="#">Imprimir</a>
            </div>
        </header>

        <main class="page-main">
            <!-- Filtros -->
            <section class="filters" aria-label="Filtros do ranking">
                <div class="field">
                    <label for="evento">Evento</label>
                    <select id="evento">
                        <option>Open Curitiba 2025</option>
                        <option>Open Joinville 2025</option>
                        <option>Copa Paraná 2025</option>
                        <option selected>Todos</option>
                    </select>
                </div>
                <div class="field">
                    <label for="faixa">Faixa</label>
                    <select id="faixa">
                        <option selected>Todas</option>
                        <option>Branca</option>
                        <option>Azul</option>
                        <option>Roxa</option>
                        <option>Marrom</option>
                        <option>Preta</option>
                    </select>
                </div>
                <div class="field">
                    <label for="idade">Idade</label>
                    <select id="idade">
                        <option selected>Todas</option>
                        <option>Infantil</option>
                        <option>Juvenil</option>
                        <option>Adulto</option>
                        <option>Master 1</option>
                        <option>Master 2</option>
                    </select>
                </div>
                <div class="field">
                    <label for="sexo">Sexo</label>
                    <select id="sexo">
                        <option selected>Todos</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                </div>
                <div class="field apply">
                    <label>&nbsp;</label>
                    <button class="btn">Aplicar</button>
                </div>
            </section>

            <!-- Pódio (top 3) -->
            <section class="podium-cards" aria-label="Pódio das academias">
                <article class="podium silver">
                    <div class="rank">🥈 2º</div>
                    <h3>Nova União</h3>
                    <p class="score"><strong>45</strong> pts</p>
                    <p class="medals"><span class="m gold">3</span><span class="m silver">4</span><span class="m bronze">2</span></p>
                </article>
                <article class="podium gold">
                    <div class="rank">🥇 1º</div>
                    <h3>Gracie Barra</h3>
                    <p class="score"><strong>57</strong> pts</p>
                    <p class="medals"><span class="m gold">4</span><span class="m silver">3</span><span class="m bronze">3</span></p>
                </article>
                <article class="podium bronze">
                    <div class="rank">🥉 3º</div>
                    <h3>Alliance</h3>
                    <p class="score"><strong>38</strong> pts</p>
                    <p class="medals"><span class="m gold">2</span><span class="m silver">3</span><span class="m bronze">7</span></p>
                </article>
            </section>

            <!-- Tabela completa -->
            <section class="card">
                <div class="table-wrap" role="region" aria-label="Tabela de ranking" tabindex="0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Academia</th>
                                <th class="t-right">Ouro</th>
                                <th class="t-right">Prata</th>
                                <th class="t-right">Bronze</th>
                                <th class="t-right">Pontos</th>
                                <th>Critério de desempate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="top">
                                <td>1</td>
                                <td>Gracie Barra</td>
                                <td class="t-right">4</td>
                                <td class="t-right">3</td>
                                <td class="t-right">3</td>
                                <td class="t-right"><strong>57</strong></td>
                                <td>Mais ouros</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nova União</td>
                                <td class="t-right">3</td>
                                <td class="t-right">4</td>
                                <td class="t-right">2</td>
                                <td class="t-right"><strong>45</strong></td>
                                <td>Empate em pontos → menos ouros</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Alliance</td>
                                <td class="t-right">2</td>
                                <td class="t-right">3</td>
                                <td class="t-right">7</td>
                                <td class="t-right"><strong>38</strong></td>
                                <td>Empate em pontos/our. → mais pratas</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>GFTeam</td>
                                <td class="t-right">2</td>
                                <td class="t-right">2</td>
                                <td class="t-right">5</td>
                                <td class="t-right"><strong>31</strong></td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Checkmat</td>
                                <td class="t-right">1</td>
                                <td class="t-right">4</td>
                                <td class="t-right">4</td>
                                <td class="t-right"><strong>28</strong></td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Atos</td>
                                <td class="t-right">1</td>
                                <td class="t-right">2</td>
                                <td class="t-right">6</td>
                                <td class="t-right"><strong>23</strong></td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Cicero Costha</td>
                                <td class="t-right">1</td>
                                <td class="t-right">1</td>
                                <td class="t-right">5</td>
                                <td class="t-right"><strong>18</strong></td>
                                <td>—</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Gracie Humaitá</td>
                                <td class="t-right">0</td>
                                <td class="t-right">2</td>
                                <td class="t-right">4</td>
                                <td class="t-right"><strong>10</strong></td>
                                <td>—</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Legenda de pontuação -->
                <div class="legend">
                    <span class="tag">Ouro: <strong>9</strong> pts</span>
                    <span class="tag">Prata: <strong>3</strong> pts</span>
                    <span class="tag">Bronze: <strong>1</strong> pt</span>
                    <span class="sep">•</span>
                    <span class="muted">Desempate: mais ouros → mais pratas → mais bronzes</span>
                </div>
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