<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Pesagem e Uniforme — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Competicoes/pesagem_uniforme.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Pesagem e Uniforme</h1>
                <p class="subtitle">Open Curitiba 2025 • Adulto • Médio • Azul • Masculino</p>
            </div>
            <div class="actions">
                <a class="btn ghost" href="/BJJ/competicoes">Voltar</a>
                <a class="btn" href="#">Exportar lista</a>
            </div>
        </header>

        <main class="page-main">
            <div class="grid">
                <!-- Fila de atletas -->
                <section class="card queue" aria-label="Fila de atletas">
                    <div class="head">
                        <h2>Fila</h2>
                        <div class="filters">
                            <input type="search" placeholder="Buscar atleta, academia...">
                            <select>
                                <option selected>Todos status</option>
                                <option>Pendente</option>
                                <option>Aprovado</option>
                                <option>Reprovado</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-wrap" role="region" tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Atleta</th>
                                    <th>Academia</th>
                                    <th>Peso alvo</th>
                                    <th>Status</th>
                                    <th class="col-actions">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>João Silva</td>
                                    <td>Gracie Barra</td>
                                    <td>Até 82,3 kg</td>
                                    <td><span class="badge warn">Pendente</span></td>
                                    <td class="col-actions"><a class="btn sm" href="#form">Selecionar</a></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Carlos Souza</td>
                                    <td>Nova União</td>
                                    <td>Até 82,3 kg</td>
                                    <td><span class="badge success">Aprovado</span></td>
                                    <td class="col-actions"><a class="btn sm ghost" href="#form">Rever</a></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Lucas Martins</td>
                                    <td>Atos</td>
                                    <td>Até 82,3 kg</td>
                                    <td><span class="badge danger">Reprovado</span></td>
                                    <td class="col-actions"><a class="btn sm ghost" href="#form">Rever</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Formulário de checagem -->
                <section id="form" class="card form" aria-label="Checagem de pesagem e uniforme">
                    <h2>Checagem</h2>

                    <!-- Identificação do atleta selecionado (mock) -->
                    <div class="ath">
                        <div class="avatar">JS</div>
                        <div class="who">
                            <strong>João Silva</strong>
                            <div class="muted">Gracie Barra • Adulto • Médio • Azul • M</div>
                        </div>
                        <div class="target">
                            <span class="chip">Peso alvo: até 82,3 kg</span>
                        </div>
                    </div>

                    <div class="two">
                        <!-- Pesagem -->
                        <section class="panel">
                            <h3>Pesagem</h3>
                            <div class="field">
                                <label for="peso_real">Peso medido (kg)</label>
                                <input id="peso_real" type="number" step="0.1" placeholder="Ex.: 81.9">
                            </div>
                            <div class="field">
                                <label for="balanca">Balança</label>
                                <select id="balanca">
                                    <option>Área 1</option>
                                    <option selected>Área 2</option>
                                    <option>Área 3</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="observacao">Observações</label>
                                <input id="observacao" type="text" placeholder="Ex.: tolerância aplicada, ajustes...">
                            </div>
                            <div class="inline">
                                <span class="hint">* Exemplo: até 82,3 kg (categoria Médio — IBJJF)</span>
                            </div>
                        </section>

                        <!-- Uniforme -->
                        <section class="panel">
                            <h3>Uniforme / Kimono</h3>
                            <ul class="checklist">
                                <li><label><input type="checkbox"> Kimono íntegro, sem rasgos</label></li>
                                <li><label><input type="checkbox"> Corda da calça presente e funcional</label></li>
                                <li><label><input type="checkbox"> Ajuste de mangas conforme regra</label></li>
                                <li><label><input type="checkbox"> Faixa correta e bem amarrada</label></li>
                                <li><label><input type="checkbox"> Unhas curtas / higiene</label></li>
                                <li><label><input type="checkbox"> Sem objetos metálicos</label></li>
                            </ul>

                            <div class="uniform-color">
                                <label>Cor do kimono</label>
                                <div class="chips">
                                    <span class="chip ghost">Azul</span>
                                    <span class="chip ghost">Branco</span>
                                    <span class="chip ghost">Preto</span>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Resultado -->
                    <section class="result">
                        <div class="status">
                            <span class="badge success">APROVADO</span>
                            <span class="sep">•</span>
                            <span class="muted">Pronto para lutar</span>
                        </div>
                        <div class="actions">
                            <a class="btn success" href="#">Aprovar</a>
                            <a class="btn danger" href="#">Reprovar</a>
                            <a class="btn ghost" href="#">Limpar</a>
                        </div>
                    </section>
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