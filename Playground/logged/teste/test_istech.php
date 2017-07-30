<?php
session_start();
include '../../php/config.php';
mysqli_query($db,"UPDATE users SET coins = coins + 5 WHERE username = '".$_SESSION['username']."'");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Playground | Kids</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="../index.php" id="logo">
        <h1>Playground</h1>
        <h2>Joaca | Invata | Testeaza-ti cunostintele</h2>
      </a>
      <nav>
        <ul>
          <li><a href="../index.php">Acasa</a></li>
          <li><a href="../about.php">Despre</a></li>
          <li><a href="../contact.php">Contact</a></li>
          <li>
          <div class="dropdown">
            <span><a href="#"><?php echo $_SESSION['username'];?></a></span>
            <div class="dropdown-content">
              <p>Coins: <?php echo $coins;?></p>
              <p><a style="color:#6ab47b" href="logout.php">Log out</a></p>
            </div>
          </div>
        </li>
        </ul>
      </nav>
    </header>

    <?php
        if(isset($_SESSION['message']))
        {
             echo "<div id='error_msg'>".$_SESSION['message']."</div>";
             unset($_SESSION['message']);
        }
    ?>

    <div id="wrappertwo">
        <div class="grid">
          <div id="quiz">

            <h3>--Test Istoria Informaticii--</h3>
            <hr style="margin-top: 20px">
            <p id="question"></p>
            <div id="buttons">
              <button id="btn1"><span id="choice1"></span></button>
              <button id="btn2"><span id="choice2"></span></button>
              <button id="btn3"><span id="choice3"></span></button>
              <button id="btn4"><span id="choice4"></span></button>
            </div>
            <hr style="margin-top: 50px">

            <div id="foot">
              <p id="intrebb"></p>
            </div>

          </div>
        </div>
    </div>

    <footer>
      <a href="https://twitter.com/alexmarginean16"><img src="../../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/alexandru.marginean.9"><img src="../../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/aldea.paul.7"><img src="../../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2017 Paul Aldea.&nbsp; <!--Alex Marginean--></p>
      <p>Alex Marginean</p>
    </footer>

    <script src="app3.js"></script>

  </body>
