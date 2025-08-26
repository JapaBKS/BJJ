<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Academias — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Academias/academias.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Academias</h1>
                <p class="subtitle">Gerencie cadastros de academias e professores</p>
            </div>
            <div class="actions">
                <a class="btn primary" href="#">+ Nova academia</a>
                <a class="btn ghost" href="#">Exportar</a>
            </div>
        </header>

        <main class="page-main">
            <!-- Filtros -->
            <section class="filters" aria-label="Filtros">
                <div class="field">
                    <label for="q">Buscar</label>
                    <input id="q" type="search" placeholder="Nome da academia, professor...">
                </div>
                <div class="field">
                    <label for="cidade">Cidade/UF</label>
                    <input id="cidade" type="text" placeholder="Ex.: Curitiba/PR">
                </div>
                <div class="field">
                    <label for="situacao">Situação</label>
                    <select id="situacao">
                        <option value="">Todas</option>
                        <option>Ativa</option>
                        <option>Inativa</option>
                    </select>
                </div>
                <div class="field">
                    <label for="prof">Professor</label>
                    <input id="prof" type="text" placeholder="Nome do professor">
                </div>
                <div class="field apply">
                    <label>&nbsp;</label>
                    <button class="btn">Aplicar</button>
                </div>
            </section>

            <!-- Lista -->
            <section class="card">
                <div class="table-wrap" role="region" aria-label="Lista de academias" tabindex="0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Academia</th>
                                <th>Professor responsável</th>
                                <th>Cidade/UF</th>
                                <th>Atletas</th>
                                <th>Situação</th>
                                <th class="col-actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gracie Barra Centro</td>
                                <td>Marcelo Andrade</td>
                                <td>Curitiba/PR</td>
                                <td>134</td>
                                <td><span class="badge success">Ativa</span></td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Ver atletas</a>
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm ghost" href="#">Inativar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nova União Batel</td>
                                <td>Ricardo Lopes</td>
                                <td>Curitiba/PR</td>
                                <td>78</td>
                                <td><span class="badge success">Ativa</span></td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Ver atletas</a>
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm ghost" href="#">Inativar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Checkmat Joinville</td>
                                <td>Bruno Ferreira</td>
                                <td>Joinville/SC</td>
                                <td>42</td>
                                <td><span class="badge warn">Inativa</span></td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Ver atletas</a>
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm ghost" href="#">Ativar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Alliance Água Verde</td>
                                <td>Rafael Della</td>
                                <td>Curitiba/PR</td>
                                <td>96</td>
                                <td><span class="badge success">Ativa</span></td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Ver atletas</a>
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm ghost" href="#">Inativar</a>
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

            <!-- Dicas / ajuda -->
            <section class="hint">
                <h3>Boas práticas</h3>
                <ul>
                    <li>Mantenha o nome da academia igual ao cadastro na federação.</li>
                    <li>Cadastre o professor responsável e contatos para validações.</li>
                    <li>Você pode exportar a lista para conferência externa.</li>
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