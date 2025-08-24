<?php require_once "../../layouts/header.php"; ?>

<div class="form-container">
    <h2>Registrar Pesagem e Uniforme</h2>
    <form action="/pesagem/registrar" method="POST" class="main-form">
        <label for="atleta">Atleta</label>
        <select name="atleta_id" id="atleta" required>
            <?php foreach ($atletas as $a): ?>
                <option value="<?= $a->id ?>"><?= $a->nome ?> (<?= $a->academia_nome ?>)</option>
            <?php endforeach; ?>
        </select>

        <label for="peso">Peso registrado (kg)</label>
        <input type="number" step="0.1" name="peso" id="peso" required>

        <label for="kimono">Uniforme correto?</label>
        <select name="kimono" id="kimono" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        <button type="submit" class="btn-primary">Registrar</button>
    </form>

    <h3>Pesagens realizadas</h3>
    <table>
        <thead>
            <tr>
                <th>Atleta</th>
                <th>Peso</th>
                <th>Uniforme</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pesagens as $p): ?>
                <tr>
                    <td><?= $p->atleta_nome ?></td>
                    <td><?= $p->peso ?> kg</td>
                    <td><?= ucfirst($p->kimono) ?></td>
                    <td><?= $p->data ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "../../layouts/footer.php"; ?>