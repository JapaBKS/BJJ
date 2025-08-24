<?php $baseUrl = $GLOBALS['__baseUrl'] ?? '';
$lutaId = (int)$luta['id']; ?>
<section class="container">
    <h1>Mesa do Mesário</h1>
    <p><strong>Luta #<?= $lutaId ?></strong> | Categoria: <?= (int)$luta['categoria_id'] ?> | Status: <?= ($luta['status'] ?? 'nao_iniciada') ?></p>

    <div id="timer" style="font-size:2rem;margin:10px 0;">05:00</div>
    <div style="display:flex; gap:16px;">
        <button id="btnStart">Iniciar</button>
        <button id="btnPause">Pausar</button>
        <button id="btnReset">Reset</button>
    </div>

    <hr>

    <h3>Placar</h3>
    <div id="placar" style="display:flex; gap:40px; align-items:center;">
        <div>
            <h4>Atleta A (<?= (int)($luta['atleta_a_id'] ?? 0) ?>)</h4>
            <div>Pontos: <span id="a_pontos">0</span></div>
            <div>Vantagens: <span id="a_vants">0</span></div>
            <div>Punições: <span id="a_puns">0</span></div>
            <div style="margin-top:8px;">
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>" data-subtipo="queda">+2 Queda</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>" data-subtipo="raspagem">+2 Raspagem</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>" data-subtipo="passagem">+3 Passagem</button><br>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>" data-subtipo="joelho">+2 Joelho</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>" data-subtipo="montada">+4 Montada</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>" data-subtipo="costas">+4 Costas</button><br>
                <button class="vantagem" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>">+1 Vantagem</button>
                <button class="punicao" data-atleta="<?= (int)($luta['atleta_a_id'] ?? 0) ?>" data-subtipo="falta_de_combatividade">Punição</button>
            </div>
        </div>
        <div style="font-size:2rem; font-weight:bold;">VS</div>
        <div>
            <h4>Atleta B (<?= (int)($luta['atleta_b_id'] ?? 0) ?>)</h4>
            <div>Pontos: <span id="b_pontos">0</span></div>
            <div>Vantagens: <span id="b_vants">0</span></div>
            <div>Punições: <span id="b_puns">0</span></div>
            <div style="margin-top:8px;">
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>" data-subtipo="queda">+2 Queda</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>" data-subtipo="raspagem">+2 Raspagem</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>" data-subtipo="passagem">+3 Passagem</button><br>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>" data-subtipo="joelho">+2 Joelho</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>" data-subtipo="montada">+4 Montada</button>
                <button class="ponto" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>" data-subtipo="costas">+4 Costas</button><br>
                <button class="vantagem" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>">+1 Vantagem</button>
                <button class="punicao" data-atleta="<?= (int)($luta['atleta_b_id'] ?? 0) ?>" data-subtipo="falta_de_combatividade">Punição</button>
            </div>
        </div>
    </div>

    <div style="margin-top:16px;">
        <label>Vencedor (ID do atleta):</label>
        <input id="vencedor_id" type="number" value="<?= (int)($luta['atleta_a_id'] ?? 0) ?>">
        <button id="btnFinalizar">Finalizar Luta</button>
    </div>
</section>

<script type="module">
    const base = "<?= $baseUrl ?>";
    const lutaId = <?= $lutaId ?>;

    // cronômetro simples (cliente)
    let total = <?= (int)($luta['tempo_seg'] ?? 300) ?>;
    let running = false,
        tick = null;

    const elTimer = document.getElementById('timer');
    const btnStart = document.getElementById('btnStart');
    const btnPause = document.getElementById('btnPause');
    const btnReset = document.getElementById('btnReset');

    function renderTime() {
        const m = String(Math.floor(total / 60)).padStart(2, '0');
        const s = String(total % 60).padStart(2, '0');
        elTimer.textContent = `${m}:${s}`;
    }
    renderTime();

    btnStart.onclick = () => {
        fetch(`${base}/mesa/${lutaId}/iniciar`, {
            method: 'POST'
        });
        if (running) return;
        running = true;
        tick = setInterval(() => {
            if (total > 0) {
                total--;
                renderTime();
            }
        }, 1000);
    };
    btnPause.onclick = () => {
        running = false;
        clearInterval(tick);
    };
    btnReset.onclick = () => {
        running = false;
        clearInterval(tick);
        total = <?= (int)($luta['tempo_seg'] ?? 300) ?>;
        renderTime();
    };

    // eventos de pontuação
    function postEvento(payload) {
        return fetch(`${base}/lutas/${lutaId}/evento`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams(payload)
        }).then(r => r.json());
    }
    document.querySelectorAll('.ponto').forEach(btn => {
        btn.onclick = () => {
            postEvento({
                tipo: 'ponto',
                atleta_id: btn.dataset.atleta,
                subtipo: btn.dataset.subtipo
            });
        };
    });
    document.querySelectorAll('.vantagem').forEach(btn => {
        btn.onclick = () => {
            postEvento({
                tipo: 'vantagem',
                atleta_id: btn.dataset.atleta
            });
        };
    });
    document.querySelectorAll('.punicao').forEach(btn => {
        btn.onclick = () => {
            postEvento({
                tipo: 'punicao',
                atleta_id: btn.dataset.atleta,
                subtipo: btn.dataset.subtipo
            });
        };
    });

    // placar em tempo real (polling)
    const elAP = document.getElementById('a_pontos');
    const elAV = document.getElementById('a_vants');
    const elAU = document.getElementById('a_puns');
    const elBP = document.getElementById('b_pontos');
    const elBV = document.getElementById('b_vants');
    const elBU = document.getElementById('b_puns');

    function refreshScore() {
        fetch(`${base}/lutas/${lutaId}/placar`)
            .then(r => r.json())
            .then(j => {
                if (!j.ok) return;
                const score = j.score || {};
                const aid = <?= (int)($luta['atleta_a_id'] ?? 0) ?>;
                const bid = <?= (int)($luta['atleta_b_id'] ?? 0) ?>;
                const a = score[aid] || {
                    pontos: 0,
                    vantagens: 0,
                    punicoes: 0
                };
                const b = score[bid] || {
                    pontos: 0,
                    vantagens: 0,
                    punicoes: 0
                };
                elAP.textContent = a.pontos;
                elAV.textContent = a.vantagens;
                elAU.textContent = a.punicoes;
                elBP.textContent = b.pontos;
                elBV.textContent = b.vantagens;
                elBU.textContent = b.punicoes;
            });
    }
    setInterval(refreshScore, 1000);
    refreshScore();

    // finalizar luta
    document.getElementById('btnFinalizar').onclick = () => {
        const vencedor = document.getElementById('vencedor_id').value;
        fetch(`${base}/lutas/${lutaId}/finalizar`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                vencedor_id: vencedor
            })
        }).then(res => {
            if (res.ok) {
                if (res.podio_gerado) {
                    alert('Luta finalizada! Pódio gerado automaticamente 🎉');
                } else {
                    alert(res.msg || 'Luta finalizada!');
                }
            } else {
                alert(res.msg || 'Erro ao finalizar.');
            }
        });

    };
</script>