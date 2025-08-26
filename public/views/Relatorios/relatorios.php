<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Relatórios — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Relatorios/relatorios.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Relatórios</h1>
                <p class="subtitle">Gere estatísticas e exporte dados dos eventos</p>
            </div>
            <div class="actions">
                <a class="btn" href="#">Exportar CSV</a>
                <a class="btn" href="#">Exportar PDF</a>
                <a class="btn ghost" href="#" onclick="window.print()">Imprimir</a>
            </div>
        </header>

        <main class="page-main">
            <!-- Filtros -->
            <section class="filters" aria-label="Filtros">
                <div class="field">
                    <label for="evento">Evento</label>
                    <select id="evento">
                        <option selected>Open Curitiba 2025</option>
                        <option>Open Joinville 2025</option>
                        <option>Copa Paraná 2025</option>
                        <option>Todos</option>
                    </select>
                </div>
                <div class="field">
                    <label for="data_i">De</label>
                    <input id="data_i" type="date" />
                </div>
                <div class="field">
                    <label for="data_f">Até</label>
                    <input id="data_f" type="date" />
                </div>
                <div class="field">
                    <label for="faixa">Faixa</label>
                    <select id="faixa">
                        <option>Todas</option>
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
                        <option>Todas</option>
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
                        <option>Todos</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                </div>
                <div class="field">
                    <label for="modalidade">Modalidade</label>
                    <select id="modalidade">
                        <option>Ambas</option>
                        <option>Com kimono</option>
                        <option>Sem kimono</option>
                    </select>
                </div>
                <div class="field">
                    <label for="academia">Academia</label>
                    <input id="academia" type="text" placeholder="Nome da academia">
                </div>
                <div class="field apply">
                    <label>&nbsp;</label>
                    <button class="btn">Aplicar</button>
                </div>
            </section>

            <!-- KPIs -->
            <section class="kpis" aria-label="Indicadores">
                <div class="kpi">
                    <div class="num">428</div>
                    <div class="label">Atletas inscritos</div>
                </div>
                <div class="kpi">
                    <div class="num">61</div>
                    <div class="label">Academias</div>
                </div>
                <div class="kpi">
                    <div class="num">312</div>
                    <div class="label">Lutas realizadas</div>
                </div>
                <div class="kpi">
                    <div class="num">74</div>
                    <div class="label">Finalizações</div>
                </div>
            </section>

            <div class="grid">
                <!-- Relatório 1: Inscrições por categoria -->
                <section class="card" aria-label="Inscrições por categoria">
                    <div class="head">
                        <h2>Inscrições por Categoria</h2>
                        <span class="muted">Mock para protótipo</span>
                    </div>

                    <div class="table-wrap" role="region" tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Categoria</th>
                                    <th class="t-right">Inscrições</th>
                                    <th>Distribuição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Adulto • Médio • Azul • M</td>
                                    <td class="t-right">64</td>
                                    <td>
                                        <div class="bar"><span style="width:68%"></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adulto • Leve • Azul • M</td>
                                    <td class="t-right">52</td>
                                    <td>
                                        <div class="bar"><span style="width:55%"></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adulto • Pena • Branca • F</td>
                                    <td class="t-right">28</td>
                                    <td>
                                        <div class="bar"><span style="width:30%"></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Master 1 • Pesado • Roxa • M</td>
                                    <td class="t-right">19</td>
                                    <td>
                                        <div class="bar"><span style="width:22%"></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Juvenil • Galo • Branca • M</td>
                                    <td class="t-right">12</td>
                                    <td>
                                        <div class="bar"><span style="width:14%"></span></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Relatório 2: Medalhas por academia -->
                <section class="card" aria-label="Medalhas por academia">
                    <div class="head">
                        <h2>Medalhas por Academia</h2>
                        <span class="muted">Cálculo 9/3/1 (ouro/prata/bronze)</span>
                    </div>

                    <div class="table-wrap" role="region" tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Academia</th>
                                    <th class="t-right">🥇</th>
                                    <th class="t-right">🥈</th>
                                    <th class="t-right">🥉</th>
                                    <th class="t-right">Pontos</th>
                                    <th>Participação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gracie Barra</td>
                                    <td class="t-right">14</td>
                                    <td class="t-right">9</td>
                                    <td class="t-right">11</td>
                                    <td class="t-right"><strong>176</strong></td>
                                    <td>
                                        <div class="bar gold"><span style="width:80%"></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nova União</td>
                                    <td class="t-right">12</td>
                                    <td class="t-right">10</td>
                                    <td class="t-right">8</td>
                                    <td class="t-right"><strong>166</strong></td>
                                    <td>
                                        <div class="bar gold"><span style="width:72%"></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alliance</td>
                                    <td class="t-right">9</td>
                                    <td class="t-right">11</td>
                                    <td class="t-right">13</td>
                                    <td class="t-right"><strong>139</strong></td>
                                    <td>
                                        <div class="bar gold"><span style="width:63%"></span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GFTeam</td>
                                    <td class="t-right">6</td>
                                    <td class="t-right">7</td>
                                    <td class="t-right">10</td>
                                    <td class="t-right"><strong>97</strong></td>
                                    <td>
                                        <div class="bar gold"><span style="width:44%"></span></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Relatório 3: Receita (mock) -->
                <section class="card" aria-label="Receita de inscrições">
                    <div class="head">
                        <h2>Receita de Inscrições</h2>
                        <span class="muted">Valores ilustrativos</span>
                    </div>

                    <div class="table-wrap" role="region" tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th class="t-right">Qtd.</th>
                                    <th class="t-right">Valor unit.</th>
                                    <th class="t-right">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Inscrição antecipada</td>
                                    <td class="t-right">210</td>
                                    <td class="t-right">R$ 90,00</td>
                                    <td class="t-right">R$ 18.900,00</td>
                                </tr>
                                <tr>
                                    <td>Inscrição final</td>
                                    <td class="t-right">218</td>
                                    <td class="t-right">R$ 120,00</td>
                                    <td class="t-right">R$ 26.160,00</td>
                                </tr>
                                <tr>
                                    <td>Trocas / 2ª categoria</td>
                                    <td class="t-right">34</td>
                                    <td class="t-right">R$ 50,00</td>
                                    <td class="t-right">R$ 1.700,00</td>
                                </tr>
                                <tr class="total">
                                    <td colspan="3" class="t-right">Total</td>
                                    <td class="t-right"><strong>R$ 46.760,00</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
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