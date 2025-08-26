<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Perfil do Atleta — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/PerfilAtleta/perfil.css">
</head>

<body>
    <div class="page">
        <!-- Cabeçalho / Identificação -->
        <header class="page-header">
            <div class="identity">
                <div class="avatar" aria-hidden="true">JS</div>
                <div class="who">
                    <h1>João da Silva</h1>
                    <p class="meta">
                        <span class="badge">Gracie Barra</span>
                        <span class="sep">•</span>
                        <span class="badge ghost">Masculino</span>
                        <span class="sep">•</span>
                        <span class="badge ghost">Nascimento: 01/01/2000</span>
                    </p>
                </div>
            </div>
            <div class="tags">
                <span class="chip belt blue">Faixa Azul</span>
                <span class="chip">Adulto</span>
                <span class="chip">Médio</span>
                <span class="chip">Com kimono</span>
            </div>
        </header>

        <main class="page-main">
            <div class="grid">
                <!-- Stats -->
                <section class="card stats" aria-label="Estatísticas">
                    <div class="stat">
                        <div class="kpi">32</div>
                        <div class="kpi-label">Lutas</div>
                    </div>
                    <div class="stat">
                        <div class="kpi win">22</div>
                        <div class="kpi-label">Vitórias</div>
                    </div>
                    <div class="stat">
                        <div class="kpi lose">10</div>
                        <div class="kpi-label">Derrotas</div>
                    </div>
                    <div class="stat">
                        <div class="kpi sub">8</div>
                        <div class="kpi-label">Finalizações</div>
                    </div>
                </section>

                <!-- Dados do atleta -->
                <section class="card about" aria-label="Dados do atleta">
                    <h2>Dados do Atleta</h2>
                    <dl class="dl">
                        <div class="row">
                            <dt>CPF</dt>
                            <dd>000.000.000-00</dd>
                        </div>
                        <div class="row">
                            <dt>E-mail</dt>
                            <dd>joao.silva@example.com</dd>
                        </div>
                        <div class="row">
                            <dt>Telefone</dt>
                            <dd>(41) 90000-0000</dd>
                        </div>
                        <div class="row">
                            <dt>Altura</dt>
                            <dd>178 cm</dd>
                        </div>
                        <div class="row">
                            <dt>Peso</dt>
                            <dd>82.3 kg</dd>
                        </div>
                        <div class="row">
                            <dt>Professor</dt>
                            <dd>Marcelo Andrade</dd>
                        </div>
                    </dl>
                </section>

                <!-- Histórico de Lutas -->
                <section class="card history" aria-label="Histórico de lutas">
                    <div class="history-head">
                        <h2>Histórico de Lutas</h2>
                        <div class="filters">
                            <select aria-label="Filtrar por ano">
                                <option>2025</option>
                                <option>2024</option>
                                <option selected>Todos</option>
                            </select>
                            <select aria-label="Filtrar por resultado">
                                <option selected>Todos</option>
                                <option>Vitória</option>
                                <option>Derrota</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-wrap" role="region" tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Evento</th>
                                    <th>Fase</th>
                                    <th>Adversário</th>
                                    <th>Academia</th>
                                    <th>Decisão</th>
                                    <th>Placar</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Open Curitiba 2025</td>
                                    <td>Quartas</td>
                                    <td>Lucas Martins</td>
                                    <td>Atos</td>
                                    <td><span class="badge success">Vitória</span></td>
                                    <td>6–2 (1V–0P)</td>
                                    <td>20/09/2025</td>
                                </tr>
                                <tr>
                                    <td>Open Joinville 2025</td>
                                    <td>Oitavas</td>
                                    <td>Pedro Lima</td>
                                    <td>Checkmat</td>
                                    <td><span class="badge">Derrota</span></td>
                                    <td>0–2</td>
                                    <td>12/10/2025</td>
                                </tr>
                                <tr>
                                    <td>Copa Paraná 2025</td>
                                    <td>Semi</td>
                                    <td>Rafael Alves</td>
                                    <td>Alliance</td>
                                    <td><span class="badge success">Vitória</span></td>
                                    <td>Finalização (Ezequiel)</td>
                                    <td>05/11/2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Premiações / Pódios -->
                <section class="card podiums" aria-label="Pódios">
                    <h2>Pódios</h2>
                    <ul class="pod-list">
                        <li>
                            <span class="medal gold">🥇</span>
                            <div>
                                <strong>Open Curitiba 2025</strong>
                                <div class="muted">Adulto • Médio • Azul • M</div>
                            </div>
                        </li>
                        <li>
                            <span class="medal silver">🥈</span>
                            <div>
                                <strong>Copa Paraná 2025</strong>
                                <div class="muted">Adulto • Médio • Azul • M</div>
                            </div>
                        </li>
                        <li>
                            <span class="medal bronze">🥉</span>
                            <div>
                                <strong>Open Cascavel 2025</strong>
                                <div class="muted">Adulto • Médio • Azul • M</div>
                            </div>
                        </li>
                    </ul>
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