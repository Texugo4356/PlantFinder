<?php
session_start();

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

      <div class="imagens">
        <img src="img/5a9c70_254895ad38a940c895f22370d98b4848mv2.png">
        <p class ="titulo">Confrei</p>
        <a class ="texto">As folhas do confrei são utilizadas desde a antiguidade 
          na preparação de chás para o tratamento caseiro de doenças gastrintestinais, disenterias, inflamações, reumatismos, hemorroidas, tosses e várias outras enfermidades. No entanto, estudos recentes mostram que o uso prolongado da planta pode ser tóxico ao fígado (levando a doença veno-oclusiva hepática e a casos de insuficiência do órgão) e causar o aparecimento de tumores malignos no fígado, nos brônquios e na bexiga, não sendo recomendado o seu uso por via oral.</a>
      </div>

      <div class="imagens">
        <img src="img/resized_muda-de-capim-cidreira-fabrica-de-hortas-1626023537.png">
        <p class ="titulo">Capim-cidreira</p>
        <a class ="texto">A erva-cidreira, também conhecida popularmente como erva-cidreira verdadeira, ou apenas por melissa, é uma planta perene herbácea da família da menta /hortelã e do boldo, nativa da Europa meridional.</a>
      </div>

      

    </section>

</body>
</html>

