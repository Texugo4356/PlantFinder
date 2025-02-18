<?php
session_start();

include "conexao_plantas.php";
$resultado = pg_query($conexao, "SELECT * FROM plantas");

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); 
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
 
  <title>Plant Finder</title>
</head>
<body>



<div class="swiper-container">
    <div class="swiper-wrapper">
    <?php while ($planta = pg_fetch_assoc($resultado)): ?>
        <div class="swiper-slide planta-card">
          <div class= "imagem">
            <img src="<?= htmlspecialchars($planta["imagem"]) ?>" width="200" alt="Imagem da planta">
          </div>
            <h3><?= htmlspecialchars($planta["nome"]) ?></h3>
            <p><?= nl2br(htmlspecialchars($planta["descricao"])) ?></p>
            <p><strong>Luz Solar:</strong> <?= htmlspecialchars($planta["luz_solar"]) ?></p>
            <p><strong>Água:</strong> <?= htmlspecialchars($planta["agua"]) ?></p>
            <p><strong>Medicinal:</strong> <?= htmlspecialchars($planta["medicinal"]) ?></p>
            <p><strong>Consumivel:</strong> <?= htmlspecialchars($planta["consumivel"]) ?></p>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- Botões de navegação -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>




  <?php pg_result_seek($resultado, 0);?>

    <div><h2>Plantas Medicinais</h2></div>

    <section class="conteudo">

      <?php while ($planta = pg_fetch_assoc($resultado)): ?>

        <?php if (htmlspecialchars($planta["medicinal"]) == 'sim'): ?>

          

          <div class="imagens">
          
            <img src="<?= htmlspecialchars($planta["imagem"]) ?>" width="200" alt="Imagem da planta">
            <h3><?= htmlspecialchars($planta["nome"]) ?></h3>
            <p><?= nl2br(htmlspecialchars($planta["descricao"])) ?></p>
            <p><strong>Luz Solar:</strong> <?= htmlspecialchars($planta["luz_solar"]) ?></p>
            <p><strong>Água:</strong> <?= htmlspecialchars($planta["agua"]) ?></p>
            <p><strong>Medicinal:</strong> <?= htmlspecialchars($planta["medicinal"]) ?></p>
            <p><strong>Consumivel:</strong> <?= htmlspecialchars($planta["consumivel"]) ?></p>

          </div>
        <?php endif;?>
        
      <?php endwhile; ?>

    
      

    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper-container', {
          slidesPerView: 2,  
          spaceBetween: 20,  
          loop: true, 
          autoplay: {
              delay: 3000, 
              disableOnInteraction: false
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev'
          }
      });
    </script>

</body>
</html>

