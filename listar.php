<?php
include "conexao_plantas.php";
$resultado = pg_query($conexao, "SELECT * FROM plantas");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Lista de Plantas</title>
</head>
<body>
    <h2>Plantas Cadastradas</h2>
    <a href="index.php">Cadastrar nova planta</a>
    <hr>

    <?php while ($planta = pg_fetch_assoc($resultado)): ?>
        <div>
            <h3><?= htmlspecialchars($planta["nome"]) ?></h3>
            <p><?= nl2br(htmlspecialchars($planta["descricao"])) ?></p>
            <p><strong>Luz Solar:</strong> <?= htmlspecialchars($planta["luz_solar"]) ?></p>
            <p><strong>Água:</strong> <?= htmlspecialchars($planta["agua"]) ?></p>
            <p><strong>Medicinal:</strong> <?= htmlspecialchars($planta["medicinal"]) ?></p>
            <p><strong>Consumivel:</strong> <?= htmlspecialchars($planta["consumivel"]) ?></p>
            <img src="<?= htmlspecialchars($planta["imagem"]) ?>" width="200" alt="Imagem da planta">
            <hr>
        </div>
    <?php endwhile; ?>
</body>
</html>