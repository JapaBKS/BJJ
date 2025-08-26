<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Notificações & Avisos — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Notificacoes/notificacoes.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Notificações & Avisos</h1>
                <p class="subtitle">Envie comunicados para atletas, academias, mesários e público. Agende, publique e arquive.</p>
            </div>
            <div class="actions">
                <a class="btn primary" href="#">+ Novo aviso</a>
                <a class="btn ghost" href="#">Exportar</a>
            </div>
        </header>

        <main class="page-main">
            <!-- Filtros -->
            <section class="filters" aria-label="Filtros">
                <div class="field">
                    <label for="q">Buscar</label>
                    <input id="q" type="search" placeholder="Título, conteúdo...">
                </div>
                <div class="field">
                    <label for="tipo">Tipo</label>
                    <select id="tipo">
                        <option value="">Todos</option>
                        <option>Aviso geral</option>
                        <option>Chamada de luta</option>
                        <option>Sistema</option>
                    </select>
                </div>
                <div class="field">
                    <label for="destino">Destino</label>
                    <select id="destino">
                        <option value="">Todos</option>
                        <option>Atletas</option>
                        <option>Academias</option>
                        <option>Mesários</option>
                        <option>Público / Placar</option>
                    </select>
                </div>
                <div class="field">
                    <label for="status">Status</label>
                    <select id="status">
                        <option value="">Todos</option>
                        <option>Ativo</option>
                        <option>Agendado</option>
                        <option>Enviado</option>
                        <option>Arquivado</option>
                    </select>
                </div>
                <div class="field">
                    <label for="data">Data</label>
                    <input id="data" type="date">
                </div>
                <div class="field apply">
                    <label>&nbsp;</label>
                    <button class="btn">Aplicar</button>
                </div>
            </section>

            <!-- Grid: lista + preview -->
            <section class="grid">
                <!-- Lista -->
                <section class="card list" aria-label="Lista de avisos">
                    <div class="head">
                        <h2>Avisos</h2>
                        <span class="muted">Mock para protótipo</span>
                    </div>

                    <ul class="notice-list">
                        <li class="notice selected">
                            <div class="title">🚨 Atraso de 10 minutos na Área 3</div>
                            <div class="meta">
                                <span class="chip ghost">Aviso geral</span>
                                <span class="chip">Público / Placar</span>
                                <span class="badge warn">Ativo</span>
                                <span class="time">Hoje • 09:15</span>
                            </div>
                        </li>

                        <li class="notice">
                            <div class="title">📣 Chamada: João Silva x Carlos Souza — Dirigir-se à área</div>
                            <div class="meta">
                                <span class="chip ghost">Chamada de luta</span>
                                <span class="chip">Atletas</span>
                                <span class="badge success">Enviado</span>
                                <span class="time">Hoje • 09:05</span>
                            </div>
                        </li>

                        <li class="notice">
                            <div class="title">🔧 Manutenção: reinício do placar da Área 1</div>
                            <div class="meta">
                                <span class="chip ghost">Sistema</span>
                                <span class="chip">Mesários</span>
                                <span class="badge">Arquivado</span>
                                <span class="time">Ontem • 18:42</span>
                            </div>
                        </li>

                        <li class="notice">
                            <div class="title">📦 Retirada de medalhas — após as finais</div>
                            <div class="meta">
                                <span class="chip ghost">Aviso geral</span>
                                <span class="chip">Atletas • Academias</span>
                                <span class="badge neutral">Agendado</span>
                                <span class="time">Hoje • 16:00</span>
                            </div>
                        </li>
                    </ul>
                </section>

                <!-- Preview -->
                <section class="card preview" aria-label="Pré-visualização do aviso">
                    <header class="preview-head">
                        <h2>🚨 Atraso de 10 minutos na Área 3</h2>
                        <div class="right">
                            <span class="badge warn">Ativo</span>
                            <div class="targets">
                                <span class="chip">Público / Placar</span>
                                <span class="chip ghost">Open Curitiba 2025</span>
                            </div>
                        </div>
                    </header>

                    <article class="preview-body">
                        <p>Devido a uma checagem adicional na mesa, as lutas da <strong>Área 3</strong> iniciarão com <strong>10 minutos de atraso</strong>. Agradecemos a compreensão.</p>
                        <ul class="summary">
                            <li><strong>Tipo:</strong> Aviso geral</li>
                            <li><strong>Visibilidade:</strong> Telões / Placar</li>
                            <li><strong>Publicado:</strong> Hoje • 09:15</li>
                            <li><strong>Autor:</strong> Coordenação do Evento</li>
                        </ul>
                    </article>

                    <footer class="preview-actions">
                        <a class="btn" href="#">Editar</a>
                        <a class="btn success" href="#">Destacar</a>
                        <a class="btn danger" href="#">Arquivar</a>
                    </footer>
                </section>
            </section>

            <!-- Agendamentos -->
            <section class="card schedules" aria-label="Agendamentos de avisos">
                <div class="head">
                    <h2>Agendamentos</h2>
                    <span class="muted">Envios programados</span>
                </div>

                <div class="table-wrap" role="region" tabindex="0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Tipo</th>
                                <th>Destino</th>
                                <th>Data/Hora</th>
                                <th>Status</th>
                                <th class="col-actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Retirada de medalhas — após as finais</td>
                                <td>Aviso geral</td>
                                <td>Atletas • Academias</td>
                                <td>Hoje • 16:00</td>
                                <td><span class="badge neutral">Agendado</span></td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm ghost" href="#">Cancelar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Chamada: Finais Adulto Médio Azul</td>
                                <td>Chamada de luta</td>
                                <td>Público / Placar</td>
                                <td>Hoje • 14:55</td>
                                <td><span class="badge neutral">Agendado</span></td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm ghost" href="#">Cancelar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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