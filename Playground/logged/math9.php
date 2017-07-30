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
        <h3 style="color: #6ab47b"><center>Progresii aritmetice</center></h3>
        <p>Fie şirul de numere : 1,3,5,7,9,11…. Observăm că fiecare termen al şirului începând cu al doilea se obţine din termenul precedent lui prin adăugarea aceluiaşi număr şi anume 2. Adică dacă notăm cu <strong>a1, a2, a3, a4,…,an, an+1,…</strong>termenii şirului de mai sus </p>
        <p style="padding-left: 30px;">Observăm că: a1=1; a2= a1+ 2=1+2=3; a3= a2+2=3+2=5; a4= a3+2=5+2=7;ş.a.m.d.</p>
        <p style="border: 3px dotted Gray">Def. Un şir de numere în care fiecare termen începând cu al doilea se obţine din cel precedent lui prin adăugarea aceluiaşi număr (nenul)se numeşte progresie aritmetică.</p>
        <p>Cu alte cuvinte , un şir de numere <strong>a1, a2, a3, … ,an, an+1,…</strong> este o progresie</p>
        <p>aritmetică dacă , pentru orice k≥ 1, avem</p>
        <p><strong><center>ak+1 = ak +r ,</center></strong></p>
        <p>unde r este un număr constant pentru şirul dat. Constanta r se numeşte <strong>raţia progresiei aritmetice.</strong></p>
        <p>Aşadar dându-i lui k pe rând valorile 1,2,3,…,n în relaţia de mai sus obţinem</p>
        <p style="padding-left: 30px;">a2 = a1 +(2−1) r,</p>
        <p style="padding-left: 30px;">a3 = a2 + r= a1 + r + r= a1 +2 r=a1 +(3−1) r,</p>
        <p style="padding-left: 30px;">a4 = a3 + r= a1 +2 r + r= a1 +3 r= a1 +(3−1) r</p>
        <hr style="border-top: dotted 3px;">
        <p style="padding-left: 30px">an = an−1 + r= a1 +(n−2) r + r= a1 +(n−1) r,…, aşadar</p>
        <p><strong><center>an = a1 +(n−1)•r , n≥ 1,</center></strong></p>
        <p>numită formula termenului general a unei progresii aritmetice, prin urmare o progresie aritmetică este complet determinată daca se cunosc primul termen a1 şi raţia r.</p>
        <p>Pe de altă parte din relaţia ak+1 = ak + r⇒ r = ak+1 − ak ,şi deci pentru k=1,2,…,n,.. avem</p>
        <p>r = a2 − a1= a3 − a2=….= an+1 − an=….</p>



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
