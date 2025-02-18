<?php
session_start();

include "conexao_plantas.php";
$resultado = pg_query($conexao, "SELECT * FROM plantas");

if (isset($_SESSION['usuario'])) {
    header("Location: home.php");
    exit();
}
?>



<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Home.css">
  <title>Plant Finder</title>
</head>
<body>
    

    <section class="conteudo">

    <?php while ($planta = pg_fetch_assoc($resultado)): ?>
        <div class="imagens">
            <img src="<?= htmlspecialchars($planta["imagem"]) ?>" width="200" alt="Imagem da planta">
            <h3><?= htmlspecialchars($planta["nome"]) ?></h3>
            <p><?= nl2br(htmlspecialchars($planta["descricao"])) ?></p>
            <p><strong>Luz Solar:</strong> <?= htmlspecialchars($planta["luz_solar"]) ?></p>
            <p><strong>Água:</strong> <?= htmlspecialchars($planta["agua"]) ?></p>
            <p><strong>Medicinal:</strong> <?= htmlspecialchars($planta["medicinal"]) ?></p>
            <p><strong>Consumivel:</strong> <?= htmlspecialchars($planta["consumivel"]) ?></p>
            
            <hr>
        </div>
    <?php endwhile; ?>

      

    </section>

</body>
</html>



