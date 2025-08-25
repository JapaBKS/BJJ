<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Categorias — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Competicoes/categorias.css">
</head>

<body>
    <div class="page">
        <!-- Breadcrumb / contexto da competição -->
        <header class="page-header">
            <nav class="breadcrumb" aria-label="breadcrumb">
                <a href="/BJJ/competicoes">Competições</a>
                <span class="sep">/</span>
                <span class="current">Open Curitiba 2025</span>
            </nav>

            <div class="title-wrap">
                <h1>Categorias</h1>
                <p class="subtitle">Gerencie faixas, pesos, idades e tempo de luta</p>
            </div>

            <div class="actions">
                <a class="btn primary" href="#">+ Nova categoria</a>
            </div>
        </header>

        <main class="page-main">
            <!-- filtros -->
            <section class="filters" aria-label="Filtros">
                <div class="field">
                    <label for="faixa">Faixa</label>
                    <select id="faixa">
                        <option value="">Todas</option>
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
                        <option value="">Todas</option>
                        <option>Infantil</option>
                        <option>Juvenil</option>
                        <option>Adulto</option>
                        <option>Master 1</option>
                        <option>Master 2</option>
                    </select>
                </div>
                <div class="field">
                    <label for="peso">Peso</label>
                    <select id="peso">
                        <option value="">Todos</option>
                        <option>Galo</option>
                        <option>Pluma</option>
                        <option>Pena</option>
                        <option>Leve</option>
                        <option>Médio</option>
                        <option>Meio-Pesado</option>
                        <option>Pesado</option>
                        <option>Super-Pesado</option>
                        <option>Pesadíssimo</option>
                    </select>
                </div>
                <div class="field">
                    <label for="sexo">Sexo</label>
                    <select id="sexo">
                        <option value="">Todos</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                </div>
                <div class="field apply">
                    <label>&nbsp;</label>
                    <button class="btn">Aplicar</button>
                </div>
            </section>

            <!-- tabela de categorias -->
            <section class="card">
                <div class="table-wrap" role="region" aria-label="Categorias" tabindex="0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Faixa</th>
                                <th>Idade</th>
                                <th>Peso</th>
                                <th>Sexo</th>
                                <th>Tempo de luta</th>
                                <th>Inscritos</th>
                                <th class="col-actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Azul</td>
                                <td>Adulto</td>
                                <td>Médio</td>
                                <td>M</td>
                                <td>6:00</td>
                                <td>18</td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm" href="#">Duplicar</a>
                                    <a class="btn sm" href="#">Chavear</a>
                                    <a class="btn sm ghost" href="#">Remover</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Branca</td>
                                <td>Adulto</td>
                                <td>Leve</td>
                                <td>M</td>
                                <td>5:00</td>
                                <td>24</td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm" href="#">Duplicar</a>
                                    <a class="btn sm" href="#">Chavear</a>
                                    <a class="btn sm ghost" href="#">Remover</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Preta</td>
                                <td>Master 1</td>
                                <td>Pesado</td>
                                <td>M</td>
                                <td>10:00</td>
                                <td>8</td>
                                <td class="col-actions">
                                    <a class="btn sm" href="#">Editar</a>
                                    <a class="btn sm" href="#">Duplicar</a>
                                    <a class="btn sm" href="#">Chavear</a>
                                    <a class="btn sm ghost" href="#">Remover</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- paginação mock -->
                <div class="pagination">
                    <button class="btn ghost" disabled>«</button>
                    <button class="btn ghost current">1</button>
                    <button class="btn ghost">2</button>
                    <button class="btn ghost">3</button>
                    <button class="btn ghost">»</button>
                </div>
            </section>

            <!-- legenda de tempos (ajuda visual) -->
            <section class="hint">
                <h3>Tempo de luta por faixa (referência)</h3>
                <ul>
                    <li>Branca: 5 min</li>
                    <li>Azul: 6 min</li>
                    <li>Roxa: 7 min</li>
                    <li>Marrom: 8 min</li>
                    <li>Preta: 10 min</li>
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