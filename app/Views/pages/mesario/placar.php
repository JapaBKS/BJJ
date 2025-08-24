<?php require_once "../../layouts/header.php"; ?>

<div class="mesario-container">
    <h2>Mesário - <?= $luta->competicao ?></h2>
    <div class="atletas">
        <div class="atleta-card"><?= $luta->atleta1 ?> <span id="pontos1">0</span></div>
        <div class="atleta-card"><?= $luta->atleta2 ?> <span id="pontos2">0</span></div>
    </div>

    <div class="controls">
        <button onclick="addPoint(1)" class="btn-primary">+ Ponto Atleta 1</button>
        <button onclick="addPoint(2)" class="btn-primary">+ Ponto Atleta 2</button>
        <button onclick="finalizarLuta()" class="btn-danger">Finalizar Luta</button>
    </div>

    <div class="cronometro">
        <p id="timer">05:00</p>
        <button onclick="startTimer()" class="btn-secondary">Iniciar</button>
        <button onclick="pauseTimer()" class="btn-secondary">Pausar</button>
    </div>
</div>

<script>
    let pontos = [0, 0];

    function addPoint(atleta) {
        pontos[atleta - 1]++;
        document.getElementById(`pontos${atleta}`).textContent = pontos[atleta - 1];
    }

    let timerInterval, time = 300;

    function startTimer() {
        clearInterval(timerInterval);
        timerInterval = setInterval(() => {
            let min = Math.floor(time / 60);
            let sec = time % 60;
            document.getElementById('timer').textContent = `${String(min).padStart(2,'0')}:${String(sec).padStart(2,'0')}`;
            if (time > 0) time--;
            else clearInterval(timerInterval);
        }, 1000);
    }

    function pauseTimer() {
        clearInterval(timerInterval);
    }

    function finalizarLuta() {
        alert('Luta finalizada!');
    }
</script>

<?php require_once "../../layouts/footer.php"; ?>