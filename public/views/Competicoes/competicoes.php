<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Competições — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Competicoes/competicoes.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Competições</h1>
                <p class="subtitle">Gerencie eventos, categorias e chaveamentos</p>
            </div>
            <div class="actions">
                <a class="btn primary" href="#">+ Nova competição</a>
            </div>
        </header>

        <main class="page-main">
            <!-- Filtros -->
            <section class="filters" aria-label="Filtros de busca">
                <div class="field">
                    <label for="q">Buscar</label>
                    <input id="q" type="search" placeholder="Nome, local...">
                </div>
                <div class="field">
                    <label for="status">Status</label>
                    <select id="status">
                        <option value="">Todos</option>
                        <option>Inscrições abertas</option>
                        <option>Inscrições encerradas</option>
                        <option>Em andamento</option>
                        <option>Finalizado</option>
                    </select>
                </div>
                <div class="field">
                    <label for="modalidade">Modalidade</label>
                    <select id="modalidade">
                        <option value="">Todas</option>
                        <option>Com kimono</option>
                        <option>Sem kimono</option>
                    </select>
                </div>
                <div class="field">
                    <label for="data">Data</label>
                    <input id="data" type="date">
                </div>
                <div class="field">
                    <label>&nbsp;</label>
                    <button class="btn">Aplicar</button>
                </div>
            </section>

            <!-- Tabela -->
            <section class="card">
                <div class="table-wrap" role="region" aria-label="Lista de competições" tabindex="0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Local</th>
                                <th>Modalidade</th>
                                <th>Status</th>
                                <th class="col-actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Open Curitiba 2025</td>
                                <td>20/09/2025</td>
                                <td>Ginásio do Tarumã</td>
                                <td>Com kimono</td>
                                <td><span class="badge success">Inscrições abertas</span></td>
                                <td class="col-actions">
                                    <a href="#" class="btn sm">Categorias</a>
                                    <a href="#" class="btn sm">Inscrições</a>
                                    <a href="#" class="btn sm">Chaveamento</a>
                                    <a href="#" class="btn sm">Mesário</a>
                                    <a href="#" class="btn sm ghost">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Open Joinville 2025</td>
                                <td>12/10/2025</td>
                                <td>Centreventos Cau Hansen</td>
                                <td>Sem kimono</td>
                                <td><span class="badge warn">Inscrições encerradas</span></td>
                                <td class="col-actions">
                                    <a href="#" class="btn sm">Categorias</a>
                                    <a href="#" class="btn sm">Inscrições</a>
                                    <a href="#" class="btn sm">Chaveamento</a>
                                    <a href="#" class="btn sm">Mesário</a>
                                    <a href="#" class="btn sm ghost">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Copa Paraná 2025</td>
                                <td>05/11/2025</td>
                                <td>Positivo Jd. Botânico</td>
                                <td>Com kimono</td>
                                <td><span class="badge neutral">Em andamento</span></td>
                                <td class="col-actions">
                                    <a href="#" class="btn sm">Categorias</a>
                                    <a href="#" class="btn sm">Inscrições</a>
                                    <a href="#" class="btn sm">Chaveamento</a>
                                    <a href="#" class="btn sm">Mesário</a>
                                    <a href="#" class="btn sm ghost">Editar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Open Cascavel 2025</td>
                                <td>23/03/2025</td>
                                <td>Ginásio Neva</td>
                                <td>Com kimono</td>
                                <td><span class="badge">Finalizado</span></td>
                                <td class="col-actions">
                                    <a href="#" class="btn sm">Relatórios</a>
                                    <a href="#" class="btn sm ghost">Editar</a>
                                </td>
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