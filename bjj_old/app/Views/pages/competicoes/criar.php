<?php require_once "../../layouts/header.php"; ?>

<div class="form-container">
    <h2>Criar Nova Competição</h2>
    <form action="/competicoes/criar" method="POST" class="main-form">
        <label for="nome">Nome da competição</label>
        <input type="text" name="nome" id="nome" required placeholder="Nome do evento">

        <label for="local">Local</label>
        <input type="text" name="local" id="local" required placeholder="Local do evento">

        <label for="data">Data</label>
        <input type="date" name="data" id="data" required>

        <label for="modalidade">Modalidade</label>
        <select name="modalidade" id="modalidade" required>
            <option value="kimono">Kimono</option>
            <option value="sem_kimono">Sem Kimono</option>
        </select>

        <button type="submit" class="btn-primary">Criar Competição</button>
    </form>
</div>

<?php require_once "../../layouts/footer.php"; ?>