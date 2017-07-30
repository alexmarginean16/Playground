<?php
session_start();
include '../php/config.php';
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
          <li><a href="index.php">Acasa</a></li>
          <li><a href="about.php">Despre</a></li>
          <li><a href="contact.php">Contact</a></li>
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

          <h3 style="color: #6ab47b"><center>Harta site-ului</center></h3>

          <ul>
            <li style="color: Black"><p style="color: black"><strong>Acasa:</strong></p></li>
            <a href="joaca.php"><p>Joaca</p></a>
            <a href="invata.php"><p>Invata</p></a>
            <a href="testeaza.php"><p>Testeaza-ti cunostintele</p></a>
            <a href="deseneaza.php"><p>Deseneaza</p></a>
            <a href="harta.php"><p>Harta site-ului (esti aici)</p></a>

            <li style="color: Black"><p style="color: black"><strong>Invata: </strong></p></li>
            <p>Clasele l-lX:&nbsp; <a href="math1-4.php">Matematica</a>,&nbsp; <a href="rom1-4.php">Limba romana</a>,&nbsp; <a href="eng1-4.php">Limba engleza</a></p>
            <p>Clasele V-Vlll:&nbsp; <a href="math8.php">Matematica</a>,&nbsp; <a href="rom8.php">Limba romana</a>,&nbsp; <a href="eng8.php">Limba engleza</a></p>
            <p>Clasa a lX-a:&nbsp; <a href="math9.php">Matematica</a>,&nbsp; <a href="info9.php">Informatica</a></p>

            <li style="color: Black"><p style="color: black"><strong>Testeaza-ti cunostintele: </strong></p></li>
            <p><a href="teste/test_matematica.php">Test matematica</a></p>
            <p><a href="teste/test_info.php">Test informatica</a></p>
            <p><a href="teste/test_istech.php">Test istoria tehnologiei</a></p>
            <p><a href="teste/test_eng.php">Test limba engleza</a></p>
            <p><a href="teste/test_rom.php">Test limba romana</a></p>

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
