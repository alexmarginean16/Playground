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
          <li><a href="contact.php" class="selected">Contact</a></li><li>
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
      <section id="primary">
        <h3>Informatii Generale</h3>
        <p>Paul Aldea si Alex Marginean - noi suntem creatorii site-ului Playground, elevi la Colegiul National "Inochentie Micu Clain" din Blaj, judetul Alba, studiem la profilul Matematica-Informatica.</p>
      </section>
      <section id="secondary">
        <h3>Detalii de Contact:</h3>
        <h3>Alex Marginean:</h3>
        <ul class="contact-info">
          <li class="phone"><a href="tel:+40 765 594 081">+40 765 594 081</a></li>
          <li class="mail"><a href="mailto:alexmarginean16@icloud.com">alexmarginean16@icloud.com</a></li>
          <li class="twitter"><a href="http://twitter.com/intent/tweet?screen_name=nickrp">@alexmarginean16</a></li>
        </ul>
        <h3>Paul Aldea:</h3>
        <ul class="contact-info">
          <li class="phone"><a href="tel:+40 773 727 594">+40 773 727 594</a></li>
          <li class="mail"><a href="mailto:paulaldeac@gmail.com">paulaldeac@gmail.com</a></li>
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
