<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Detalhe da Luta — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Lutas/detalhe.css">
</head>

<body>
    <div class="page">
        <header class="page-header">
            <div class="title-wrap">
                <h1>Detalhe da Luta</h1>
                <p class="subtitle">Open Curitiba 2025 • Área 3 • Adulto • Médio • Azul • M</p>
            </div>
            <div class="actions">
                <a class="btn ghost" href="/BJJ/mesario">Mesário</a>
                <a class="btn" href="#">Imprimir</a>
            </div>
        </header>

        <main class="page-main">
            <div class="grid">
                <!-- Resumo do placar -->
                <section class="card summary" aria-label="Resumo do placar">
                    <div class="vs">
                        <article class="ath red">
                            <h2>João Silva</h2>
                            <p class="academy">Gracie Barra</p>

                            <div class="scores">
                                <div class="box big" title="Pontos">6</div>
                                <div class="box" title="Vantagens">1<span class="label">Vant.</span></div>
                                <div class="box" title="Punições">0<span class="label">Pun.</span></div>
                            </div>
                        </article>

                        <span class="vs-sep">VS</span>

                        <article class="ath blue">
                            <h2>Carlos Souza</h2>
                            <p class="academy">Nova União</p>

                            <div class="scores">
                                <div class="box big" title="Pontos">2</div>
                                <div class="box" title="Vantagens">0<span class="label">Vant.</span></div>
                                <div class="box" title="Punições">1<span class="label">Pun.</span></div>
                            </div>
                        </article>
                    </div>

                    <div class="meta">
                        <div><strong>Tempo:</strong> 06:00 / 06:00</div>
                        <div><strong>Árbitro:</strong> A. Fernandes</div>
                        <div><strong>Fase:</strong> Quartas de final (2/4)</div>
                    </div>
                </section>

                <!-- Linha do tempo -->
                <section class="card timeline" aria-label="Linha do tempo da luta">
                    <div class="head">
                        <h2>Linha do tempo</h2>
                        <span class="muted">Eventos (mock)</span>
                    </div>
                    <ol class="events">
                        <li>
                            <time>05:21</time>
                            <span class="pill red">Queda +2</span>
                            <span class="muted">João Silva</span>
                        </li>
                        <li>
                            <time>03:47</time>
                            <span class="pill red">Passagem +3</span>
                            <span class="muted">João Silva</span>
                        </li>
                        <li>
                            <time>02:15</time>
                            <span class="pill blue">Raspagem +2</span>
                            <span class="muted">Carlos Souza</span>
                        </li>
                        <li>
                            <time>01:58</time>
                            <span class="pill warn">Punição</span>
                            <span class="muted">Carlos Souza — Fuga de área</span>
                        </li>
                        <li>
                            <time>00:33</time>
                            <span class="pill ghost">Vantagem</span>
                            <span class="muted">João Silva — Quase estrangulamento</span>
                        </li>
                    </ol>
                </section>

                <!-- Resultado da luta -->
                <section class="card result" aria-label="Resultado">
                    <h2>Resultado</h2>

                    <form class="result-form" action="#" method="post">
                        <fieldset class="method">
                            <legend>Método</legend>
                            <label class="chip"><input type="radio" name="mtd" checked> Pontos</label>
                            <label class="chip"><input type="radio" name="mtd"> Finalização</label>
                            <label class="chip"><input type="radio" name="mtd"> Desclassificação (DQ)</label>
                            <label class="chip"><input type="radio" name="mtd"> WO</label>
                        </fieldset>

                        <div class="winner-grid">
                            <div class="field">
                                <label>Vencedor</label>
                                <select>
                                    <option>João Silva (Gracie Barra)</option>
                                    <option>Carlos Souza (Nova União)</option>
                                    <option>Sem vencedor</option>
                                </select>
                            </div>

                            <div class="field">
                                <label>Placar final</label>
                                <div class="score-final">
                                    <input type="text" value="6" aria-label="pontos vermelho">
                                    <span class="sep">—</span>
                                    <input type="text" value="2" aria-label="pontos azul">
                                </div>
                                <div class="subline">
                                    <span><strong>Vant.:</strong> 1 — 0</span>
                                    <span class="sep">•</span>
                                    <span><strong>Pun.:</strong> 0 — 1</span>
                                </div>
                            </div>
                        </div>

                        <div class="extra">
                            <div class="field">
                                <label>Finalização (se aplicável)</label>
                                <select>
                                    <option>—</option>
                                    <option>Chave de braço</option>
                                    <option>Triângulo</option>
                                    <option>Estrangulamento pelas costas</option>
                                    <option>Americana</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Motivo DQ (se aplicável)</label>
                                <select>
                                    <option>—</option>
                                    <option>Faltas gravíssimas</option>
                                    <option>3ª punição</option>
                                    <option>Conduta antidesportiva</option>
                                </select>
                            </div>
                            <div class="field full">
                                <label>Observações</label>
                                <input type="text" placeholder="Notas do árbitro / mesa">
                            </div>
                        </div>

                        <div class="actions">
                            <a class="btn ghost" href="/BJJ/mesario">Cancelar</a>
                            <button class="btn danger" type="button">Invalidar</button>
                            <button class="btn success" type="button">Salvar resultado</button>
                        </div>
                    </form>
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