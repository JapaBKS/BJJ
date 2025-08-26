<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Histórico de Lutas — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/PerfilAtleta/historico.css">
</head>

<body>
    <div class="page">

        <header class="page-header">
            <div class="identity">
                <div class="avatar" aria-hidden="true">JS</div>
                <div class="who">
                    <h1>Histórico de Lutas — João da Silva</h1>
                    <p class="meta">
                        <span class="chip belt">Azul</span>
                        <span class="sep">•</span>
                        <span class="chip">Adulto</span>
                        <span class="sep">•</span>
                        <span class="chip">Médio</span>
                        <span class="sep">•</span>
                        <span class="muted">Gracie Barra • Masculino</span>
                    </p>
                </div>
            </div>
            <div class="actions">
                <a class="btn" href="#">Exportar CSV</a>
                <a class="btn ghost" href="#" onclick="window.print()">Imprimir</a>
            </div>
        </header>

        <main class="page-main">
            <!-- Filtros -->
            <section class="filters" aria-label="Filtros do histórico">
                <div class="field">
                    <label for="evento">Evento</label>
                    <select id="evento">
                        <option selected>Todos</option>
                        <option>Open Curitiba 2025</option>
                        <option>Open Joinville 2025</option>
                        <option>Copa Paraná 2025</option>
                    </select>
                </div>
                <div class="field">
                    <label for="resultado">Resultado</label>
                    <select id="resultado">
                        <option selected>Todos</option>
                        <option>Vitória</option>
                        <option>Derrota</option>
                        <option>Finalização</option>
                        <option>DQ</option>
                    </select>
                </div>
                <div class="field">
                    <label for="metodo">Método</label>
                    <select id="metodo">
                        <option selected>Todos</option>
                        <option>Pontos</option>
                        <option>Vantagens</option>
                        <option>Finalização</option>
                        <option>Desclassificação</option>
                        <option>WO</option>
                    </select>
                </div>
                <div class="field">
                    <label for="periodo_i">Período (de)</label>
                    <input id="periodo_i" type="date">
                </div>
                <div class="field">
                    <label for="periodo_f">Período (até)</label>
                    <input id="periodo_f" type="date">
                </div>
                <div class="field">
                    <label for="q">Buscar</label>
                    <input id="q" type="search" placeholder="Adversário, academia...">
                </div>
                <div class="field apply">
                    <label>&nbsp;</label>
                    <button class="btn">Aplicar</button>
                </div>
            </section>

            <!-- Resumo -->
            <section class="kpis">
                <div class="kpi">
                    <div class="num">32</div>
                    <div class="label">Lutas</div>
                </div>
                <div class="kpi">
                    <div class="num win">22</div>
                    <div class="label">Vitórias</div>
                </div>
                <div class="kpi">
                    <div class="num loss">10</div>
                    <div class="label">Derrotas</div>
                </div>
                <div class="kpi">
                    <div class="num sub">8</div>
                    <div class="label">Finalizações</div>
                </div>
            </section>

            <!-- Lista (cards empilháveis + tabela acessível) -->
            <section class="card">
                <div class="table-wrap" role="region" aria-label="Lista de lutas" tabindex="0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Evento</th>
                                <th>Fase</th>
                                <th>Adversário</th>
                                <th>Categoria</th>
                                <th>Resultado</th>
                                <th>Placar</th>
                                <th>Método</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12/06/2025</td>
                                <td>Open Curitiba 2025</td>
                                <td>Quartas</td>
                                <td>Carlos Souza (Nova União)</td>
                                <td>Adulto • Médio • Azul • M</td>
                                <td><span class="tag win">Vitória</span></td>
                                <td>6 — 2 (1V–1P)</td>
                                <td>Pontos</td>
                            </tr>
                            <tr>
                                <td>15/05/2025</td>
                                <td>Open Londrina 2025</td>
                                <td>Oitavas</td>
                                <td>Bruno Costa (Gracie Barra)</td>
                                <td>Adulto • Médio • Azul • M</td>
                                <td><span class="tag sub">Finalização</span></td>
                                <td>—</td>
                                <td>Estrangulamento pelas costas</td>
                            </tr>
                            <tr>
                                <td>22/03/2025</td>
                                <td>Open Cascavel 2025</td>
                                <td>Semi</td>
                                <td>Rafael Alves (Alliance)</td>
                                <td>Adulto • Médio • Azul • M</td>
                                <td><span class="tag loss">Derrota</span></td>
                                <td>0 — 2</td>
                                <td>Pontos</td>
                            </tr>
                            <tr>
                                <td>04/02/2025</td>
                                <td>Open Ponta Grossa 2025</td>
                                <td>Final</td>
                                <td>André Dias (GFTeam)</td>
                                <td>Adulto • Médio • Azul • M</td>
                                <td><span class="tag win">Vitória</span></td>
                                <td>V — —</td>
                                <td>WO</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Paginação mock -->
                <div class="pagination">
                    <button class="btn ghost" disabled>«</button>
                    <button class="btn ghost current">1</button>
                    <button class="btn ghost">2</button>
                    <button class="btn ghost">3</button>
                    <button class="btn ghost">»</button>
                </div>
            </section>

            <!-- Observações -->
            <section class="hint">
                <h3>Notas</h3>
                <ul>
                    <li><strong>Placar</strong>: pontos — vantagens (V) — punições (P), quando aplicável.</li>
                    <li><strong>Método</strong>: pontos, vantagens, finalização, DQ (desclassificação) ou WO.</li>
                </ul>
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