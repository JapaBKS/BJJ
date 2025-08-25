<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Mesário — ShiaiFlow</title>

    <link rel="stylesheet" href="/BJJ/public/css/style.css">
    <link rel="stylesheet" href="/BJJ/public/css/Mesario/mesario.css">
</head>

<body>
    <div class="page">

        <!-- Barra superior com contexto da luta -->
        <header class="desk-header">
            <div class="event">
                <strong>Evento:</strong> Open Curitiba — 2025 • <strong>Área:</strong> 3
            </div>
            <div class="category">
                <strong>Categoria:</strong> Adulto • Médio • Faixa Azul • Masculino
            </div>
            <div class="bout">
                <strong>Luta:</strong> Quartas de final — 2/4
            </div>
        </header>

        <!-- Placar principal -->
        <main class="desk-main">

            <!-- Cronômetro e status -->
            <section class="timer-board" aria-label="Cronômetro e status da luta">
                <div class="timer">05:00</div>
                <div class="status">
                    <span class="status-dot"></span> Pronta para iniciar
                </div>
            </section>

            <!-- Atletas / placares -->
            <section class="scoreboard" aria-label="Placar dos atletas">

                <!-- Atleta vermelho -->
                <article class="athlete red" aria-labelledby="ath-red">
                    <header class="ath-header">
                        <h2 id="ath-red">João Silva</h2>
                        <p class="academy">Gracie Barra</p>
                    </header>

                    <div class="score-grid">
                        <div class="score-box big" title="Pontos">0</div>
                        <div class="score-box" title="Vantagens">0<span class="label">Vant.</span></div>
                        <div class="score-box" title="Punições">0<span class="label">Punições</span></div>
                    </div>

                    <!-- Controles (somente layout, sem JS) -->
                    <div class="controls">
                        <div class="group">
                            <span class="group-title">Pontos</span>
                            <button class="btn">Queda +2</button>
                            <button class="btn">Raspagem +2</button>
                            <button class="btn">Passagem +3</button>
                            <button class="btn">Joelho na Barriga +2</button>
                            <button class="btn">Montada +4</button>
                            <button class="btn">Costas +4</button>
                        </div>
                        <div class="group">
                            <span class="group-title">Vantagens</span>
                            <button class="btn">+1</button>
                            <button class="btn">-1</button>
                        </div>
                        <div class="group">
                            <span class="group-title">Punições</span>
                            <button class="btn warning">Combatividade</button>
                            <button class="btn warning">Grave</button>
                            <button class="btn warning">Gravíssima</button>
                            <button class="btn">Remover</button>
                        </div>
                    </div>
                </article>

                <!-- Atleta azul -->
                <article class="athlete blue" aria-labelledby="ath-blue">
                    <header class="ath-header">
                        <h2 id="ath-blue">Carlos Souza</h2>
                        <p class="academy">Nova União</p>
                    </header>

                    <div class="score-grid">
                        <div class="score-box big" title="Pontos">0</div>
                        <div class="score-box" title="Vantagens">0<span class="label">Vant.</span></div>
                        <div class="score-box" title="Punições">0<span class="label">Punições</span></div>
                    </div>

                    <div class="controls">
                        <div class="group">
                            <span class="group-title">Pontos</span>
                            <button class="btn">Queda +2</button>
                            <button class="btn">Raspagem +2</button>
                            <button class="btn">Passagem +3</button>
                            <button class="btn">Joelho na Barriga +2</button>
                            <button class="btn">Montada +4</button>
                            <button class="btn">Costas +4</button>
                        </div>
                        <div class="group">
                            <span class="group-title">Vantagens</span>
                            <button class="btn">+1</button>
                            <button class="btn">-1</button>
                        </div>
                        <div class="group">
                            <span class="group-title">Punições</span>
                            <button class="btn warning">Combatividade</button>
                            <button class="btn warning">Grave</button>
                            <button class="btn warning">Gravíssima</button>
                            <button class="btn">Remover</button>
                        </div>
                    </div>
                </article>

            </section>

            <!-- Ações gerais da luta -->
            <section class="global-actions" aria-label="Ações da luta">
                <button class="btn ghost">Iniciar</button>
                <button class="btn ghost">Pausar</button>
                <button class="btn ghost">Reiniciar</button>
                <button class="btn success">Finalização</button>
                <button class="btn danger">Desclassificação</button>
                <button class="btn primary">Encerrar e salvar resultado</button>
            </section>
        </main>

        <footer class="desk-footer">
            <small>© <span id="year"></span> ShiaiFlow • Interface do Mesário</small>
        </footer>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>