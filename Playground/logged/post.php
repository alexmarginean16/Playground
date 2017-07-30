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

    <form action="upload.php" method="post" enctype="multipart/form-data" id="loadup">
      Selecteaza o imagine pentru incarcare:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Incarca imaginea" name="submit" id="conn">
    </form>

    <ul id="pozz">
    <?php

    $files = glob("uploads/*.*");

      for ($i=0; $i<count($files); $i++) {
        $image = $files[$i];
        echo "<li>".'<center>'.'<a href="'.$image.'">'.'<img src="'.$image .'" alt="Random image" width="450" height="250px" />'.'<p>'.$image.'</p>'.'</a>'.'</center>'."</li>";
      }
    ?>
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
