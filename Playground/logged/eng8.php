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

        <h3 style="color: #6ab47b"><center>Timpurile verbelor în engleza</center></h3>

        <div style="float: right;">
          <br><br><br>
          <p><strong>Future Tense</strong></p>
          <p>I will work<br>
            You will work<br>
            He will work<br>
            She will work<br>
            We will work<br>
            You will work<br>
            They will work
          </p>

          <p><strong>Future Continuous</strong></p>
          <p>I will be working<br>
            You will be working<br>
            He will be working<br>
            She will be working<br>
            We will be working<br>
            You will be working<br>
            They will be working
          </p>

          <p><strong>Future Perfect</strong></p>
          <p>I will have worked<br>
            You will have worked<br>
            He will have worked<br>
            She will have worked<br>
            We will have worked<br>
            You will have worked<br>
            They will have worked
          </p>

          <p><strong>Future Perfect Continuous</strong></p>
          <p>I will have been working<br>
            You will have been working<br>
            He will have been working<br>
            She will have been working<br>
            We will have been working<br>
            You will have been working<br>
            They will have been working
          </p>
        </div>

        <div style="width: 550px;">
        <p>To work = A munci (verb regulat)</p>
        <br>
        <div style="float: right;">
        <p><strong>Past Tense</strong></p>
        <p>I worked<br>
          You worked<br>
          He worked<br>
          She worked<br>
          We worked<br>
          You worked<br>
          They worked
        </p>

        <p><strong>Past Continuous</strong></p>
        <p>I was working<br>
          You were working<br>
          He was working<br>
          She was working<br>
          We were working<br>
          You were working<br>
          They were working
        </p>

        <p><strong>Past Perfect</strong></p>
        <p>I had worked<br>
          You had worked<br>
          He had worked<br>
          She had worked<br>
          We had worked<br>
          You had worked<br>
          They had worked

        </p>

        <p><strong>Past Perfect Continuous</strong></p>
        <p>I had been working<br>
          You had been working<br>
          He had been working<br>
          She had been working<br>
          We had been working<br>
          You had been working<br>
          They had been working

        </p>
      </div>
        <p><strong>Present Tense</strong></p>
        <p>I work<br>
          You work<br>
          He works<br>
          She works<br>
          We work<br>
          You work<br>
          They work
        </p>

        <p><strong>Present Continuous</strong></p>
        <p>I am working<br>
          You are working<br>
          He is working<br>
          She is working<br>
          We are working<br>
          You are working<br>
          They are working
        </p>

        <p><strong>Present Perfect</strong></p>
        <p>I have worked<br>
          You have worked<br>
          He has worked<br>
          She has worked<br>
          We have worked<br>
          You have worked<br>
          They have worked
        </p>

        <p><strong>Present Perfect Continuous</strong></p>
        <p>I have been working<br>
          You have been working<br>
          He has been working<br>
          She has been working<br>
          We have been working<br>
          You have been working<br>
          They have been working
        </p>

      </div>

      </section>
    </div>

    <footer>
      <a href="https://twitter.com/alexmarginean16"><img src="../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/alexandru.marginean.9"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/aldea.paul.7"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2017 Paul Aldea.&nbsp; <!--Alex Marginean--></p>
      <p>Alex Marginean</p>
    </footer>
