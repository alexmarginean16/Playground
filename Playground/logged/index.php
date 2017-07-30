<?php
session_start();
include '../php/config.php'
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Playground | Kids</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <h1>Playground</h1>
        <h2>Joaca | Invata | Testeaza-ti cunostintele</h2>
      </a>
      <nav>
        <ul>
          <li><a href="index.php" class="selected">Acasa</a></li>
          <li><a href="about.php">Despre</a></li>
          <li><a href="contact.php">Contact</a></li>
          <!--<li><a href="logout.php"></a></li>-->
          <li>
          <div class="dropdown">
            <span><a href="#"><?php echo $_SESSION['username'];?></a></span>
            <div class="dropdown-content">
              <p>Coins: <?php echo $_SESSION['coins'];?></p>
              <p><a style="color:#6ab47b" href="logout.php">Log out</a></p>
            </div>
          </div>
        </li>
        </ul>
      </nav>
    </header>
    <div id="wrapper">
      <section>
        <ul id="gallery">
          <li>
            <a href="joaca.php">
              <img src="../img/play_cloud.png">
              <p>Joaca</p>
            </a>
          </li>
          <li>
            <a href="invata.php">
              <img src="../img/invata_cloud.png">
              <p>Invata</p>
            </a>
          </li>
          <li>
            <a href="testeaza.php">
              <img src="../img/testeaza_cloud.png">
              <p>Testeaza-ti cunostintele</p>
            </a>
          </li>
          <li id="gal">
            <a href="deseneaza.php">
              <img src="../img/paint_cloud.png">
              <p>Deseneaza</p>
            </a>
          </li>
          <li id="gal">
            <a href="harta.php">
              <img src="../img/cloud_harta.png">
              <p>Harta site-ului</p>
            </a>
          </li>
          <li>
            <a href="post.php">
              <img src="../img/postcloud.png">
              <p>Postarile comunitatii</p>
            </a>
          </li>
        </ul>
      </section>
    </div>
    <footer>
      <a href="https://twitter.com/alexmarginean16"><img src="../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/alexandru.marginean.9"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/aldea.paul.7"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2017 Paul Aldea.&nbsp; <!--Alex Marginean--></p>
      <p>Alex Marginean</p>
    </footer>
  </body>
</html>
