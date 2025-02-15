
<header>
      
<link rel="stylesheet" href="header.css">


<div class="container">
      <div class="logo"><img src="img/PlantFinder2.png"></div>
      <div class="menu">
        <nav>
        <?php if (isset($_SESSION['usuario'])): ?>
            <a href="home.php">Home</a>
        <?php else: ?>
            <a href="index.php">Home</a>
        <?php endif; ?>
          <a href="discussao.html">Discussões</a>
          <a href="buscar.html">Buscar</a>
          <a href="#">Sobre</a>

        </nav>


      </div>
      
    <?php if (isset($_SESSION['usuario'])): ?>
        <div class="logout">
            <button onclick = "window.location.href='logout.php';">Sair</button>
            
        </div>
        <div class="user"><img src="img/user1.png" onclick = "window.location.href='usuario.php';"></div>
        

    <?php else: ?> 
        <div class="login">
            <button onclick = "window.location.href='login.php';">Login</button>

        </div>
    <?php endif; ?>
  </div>
  
  </header>      