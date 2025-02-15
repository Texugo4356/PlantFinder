<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); 
    exit();
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Usuario</title>
  
</head>
<body>
  <link rel="stylesheet" href="usuario.css">

  <div class="user">
    <img src="img/mais3.png" onclick = "window.location.href='cadastrar_planta.php';">
  </div>

    

</body>
</html>   