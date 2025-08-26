<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Inscrição de Atletas — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Inscricoes/inscricao.css">
</head>

<body>
    <div class="page">

        <header class="page-header">
            <div class="title-wrap">
                <h1>Inscrição de Atletas</h1>
                <p class="subtitle">Complete os passos para inscrever o atleta na competição selecionada</p>
            </div>
            <div class="context">
                <span class="badge">Open Curitiba 2025</span>
                <span class="sep">•</span>
                <span class="badge ghost">Com kimono</span>
            </div>
        </header>

        <main class="page-main">
            <section class="wizard">

                <!-- Navegação (radios para trocar de etapa sem JS) -->
                <input type="radio" name="step" id="s1" checked>
                <input type="radio" name="step" id="s2">
                <input type="radio" name="step" id="s3">

                <ol class="steps" role="tablist" aria-label="Etapas de inscrição">
                    <li class="step">
                        <label for="s1" role="tab" aria-controls="panel1">
                            <span class="index">1</span> Dados Pessoais
                        </label>
                    </li>
                    <li class="step">
                        <label for="s2" role="tab" aria-controls="panel2">
                            <span class="index">2</span> Dados Físicos
                        </label>
                    </li>
                    <li class="step">
                        <label for="s3" role="tab" aria-controls="panel3">
                            <span class="index">3</span> Dados de Luta
                        </label>
                    </li>
                </ol>

                <div class="wizard-grid">
                    <!-- Conteúdo das etapas -->
                    <div class="panels">
                        <!-- Etapa 1 -->
                        <section id="panel1" class="panel" aria-labelledby="s1">
                            <h2>Dados Pessoais</h2>
                            <form class="form-grid" action="#" method="post">
                                <div class="field">
                                    <label for="nome">Nome completo</label>
                                    <input id="nome" type="text" placeholder="Ex.: João da Silva" required>
                                </div>
                                <div class="field">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" type="text" placeholder="000.000.000-00">
                                </div>
                                <div class="field">
                                    <label for="nascimento">Data de nascimento</label>
                                    <input id="nascimento" type="date" required>
                                </div>
                                <div class="field">
                                    <label for="sexo">Sexo</label>
                                    <select id="sexo" required>
                                        <option value="">Selecione</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="email">E-mail</label>
                                    <input id="email" type="email" placeholder="seuemail@exemplo.com">
                                </div>
                                <div class="field">
                                    <label for="telefone">Telefone</label>
                                    <input id="telefone" type="tel" placeholder="(00) 90000-0000">
                                </div>
                                <div class="field">
                                    <label for="academia">Academia</label>
                                    <input id="academia" type="text" placeholder="Nome da academia" required>
                                </div>
                                <div class="field">
                                    <label for="professor">Professor</label>
                                    <input id="professor" type="text" placeholder="Nome do professor">
                                </div>
                            </form>
                            <div class="nav-actions">
                                <label class="btn primary" for="s2">Avançar</label>
                            </div>
                        </section>

                        <!-- Etapa 2 -->
                        <section id="panel2" class="panel" aria-labelledby="s2">
                            <h2>Dados Físicos</h2>
                            <form class="form-grid" action="#" method="post">
                                <div class="field">
                                    <label for="peso">Peso (kg)</label>
                                    <input id="peso" type="number" step="0.1" placeholder="Ex.: 82.3" required>
                                </div>
                                <div class="field">
                                    <label for="altura">Altura (cm)</label>
                                    <input id="altura" type="number" step="1" placeholder="Ex.: 178">
                                </div>
                                <div class="field">
                                    <label for="documento">Documento com foto</label>
                                    <input id="documento" type="text" placeholder="RG, CNH, Passaporte">
                                </div>
                                <div class="field">
                                    <label for="laudo">Observações médicas</label>
                                    <input id="laudo" type="text" placeholder="Ex.: atestado, restrições, etc.">
                                </div>
                            </form>
                            <div class="nav-actions">
                                <label class="btn ghost" for="s1">Voltar</label>
                                <label class="btn primary" for="s3">Avançar</label>
                            </div>
                        </section>

                        <!-- Etapa 3 -->
                        <section id="panel3" class="panel" aria-labelledby="s3">
                            <h2>Dados de Luta</h2>
                            <form class="form-grid" action="#" method="post">
                                <div class="field">
                                    <label for="faixa">Faixa</label>
                                    <select id="faixa" required>
                                        <option value="">Selecione</option>
                                        <option>Branca</option>
                                        <option>Azul</option>
                                        <option>Roxa</option>
                                        <option>Marrom</option>
                                        <option>Preta</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="idade-cat">Categoria de Idade</label>
                                    <select id="idade-cat" required>
                                        <option value="">Selecione</option>
                                        <option>Infantil</option>
                                        <option>Juvenil</option>
                                        <option>Adulto</option>
                                        <option>Master 1</option>
                                        <option>Master 2</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="peso-cat">Categoria de Peso</label>
                                    <select id="peso-cat" required>
                                        <option value="">Selecione</option>
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
                                    <label for="modalidade">Modalidade</label>
                                    <select id="modalidade" required>
                                        <option value="">Selecione</option>
                                        <option>Com kimono</option>
                                        <option>Sem kimono</option>
                                    </select>
                                </div>
                                <div class="field full">
                                    <label class="checkbox">
                                        <input type="checkbox"> Declaro que não possuo experiência em judô/wrestling que invalide a inscrição como faixa-branca
                                    </label>
                                </div>
                            </form>
                            <div class="nav-actions">
                                <label class="btn ghost" for="s2">Voltar</label>
                                <button class="btn primary" type="button">Concluir (mock)</button>
                            </div>
                        </section>
                    </div>

                    <!-- Resumo lateral (mock) -->
                    <aside class="summary" aria-label="Resumo">
                        <h3>Resumo</h3>
                        <ul>
                            <li><strong>Atleta:</strong> João da Silva</li>
                            <li><strong>Academia:</strong> Gracie Barra</li>
                            <li><strong>Nascimento:</strong> 01/01/2000</li>
                            <li><strong>Peso:</strong> 82.3 kg</li>
                            <li><strong>Faixa:</strong> Azul</li>
                            <li><strong>Idade:</strong> Adulto</li>
                            <li><strong>Peso (cat.):</strong> Médio</li>
                            <li><strong>Modalidade:</strong> Com kimono</li>
                        </ul>
                        <p class="note">* Campos e validações são estáticos para apresentação.</p>
                    </aside>
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