<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","authentication");

$results = mysqli_query($db,"SELECT coins FROM users WHERE username = '".$_SESSION['username']."'");
while ($row = mysqli_fetch_array($results))
{
$coins = $row['coins'];
}

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

    <div id="wrapper">
      <section>

        <center><h3 style="color: #6ab47b">Alfabetul limbii române</h3></center>
        <p><strong>Alfabetul limbii române</strong> este totalitatea literelor folosite pentru scrierea limbii române. În prezent se folosește un alfabet alcătuit din cele 26 de caractere ale alfabetului latin la care se adaugă o serie de 5 caractere suplimentare formate prin aplicarea de semne diacritice(etno-fonetice)  specifice unor ţări sau grupuri de ţări înrudite:</p>

        <img src="../img/alfabet.png" id="alfabet" alt="alfabetul limbii romane"/>
        <img src="../img/copii.png" id="alfabet" alt="alfabetul limbii romane"/>

        <table>
          <tr>
            <th>Litera</th>
            <th>Nume</th>
          </tr>
          <tr>
            <td>A, a</td>
            <td>a</td>
          </tr>
          <tr>
            <td>Ă, ă</td>
            <td>ă</td>
          </tr>
          <tr>
            <td>Â, â</td>
            <td>î / î din a</td>
          </tr>
          <tr>
            <td>B, b</td>
            <td>be / bî</td>
          </tr>
          <tr>
            <td>C, c</td>
            <td>ce / cî</td>
          </tr>
          <tr>
            <td>D, d</td>
            <td>de / dî</td>
          </tr>
          <tr>
            <td>E, e</td>
            <td>e</td>
          </tr>
          <tr>
            <td>F, f</td>
            <td>ef / fe / fî</td>
          </tr>
          <tr>
            <td>G, g</td>
            <td>ge / ghe / gî</td>
          </tr>
          <tr>
            <td>H, h</td>
            <td>haș / ha / hî</td>
          </tr>
          <tr>
            <td>I, i</td>
            <td>i</td>
          </tr>
          <tr>
            <td>Î, î</td>
            <td>î / î din i</td>
          </tr>
          <tr>
            <td>J, j</td>
            <td>je / jî</td>
          </tr>
          <tr>
            <td>K, k</td>
            <td>ca / capa</td>
          </tr>
          <tr>
            <td>L, l</td>
            <td>el / le / lî</td>
          </tr>
          <tr>
            <td>M, m</td>
            <td>em / me / mî</td>
          </tr>
          <tr>
            <td>N, n</td>
            <td>en / ne / nî</td>
          </tr>
          <tr>
            <td>O, o</td>
            <td>o</td>
          </tr>
          <tr>
            <td>P, p</td>
            <td>pe / pî</td>
          </tr>
          <tr>
            <td>Q, q</td>
            <td>kü / chiu</td>
          </tr>
          <tr>
            <td>R, r</td>
            <td>er / re / rî</td>
          </tr>
          <tr>
            <td>S, s</td>
            <td>es / se / sî</td>
          </tr>
          <tr>
            <td>Ș, ș</td>
            <td>șe / șî</td>
          </tr>
          <tr>
            <td>T, t</td>
            <td>te / tî</td>
          </tr>
          <tr>
            <td>Ț, ț</td>
            <td>țe / țî</td>
          </tr>
          <tr>
            <td>U, u</td>
            <td>u</td>
          </tr>
          <tr>
            <td>V, v</td>
            <td>ve / vî</td>
          </tr>
          <tr>
            <td>W, w</td>
            <td>dublu ve / dublu vî</td>
          </tr>
          <tr>
            <td>X, x</td>
            <td>ics</td>
          </tr>
          <tr>
            <td>Y, y</td>
            <td>igrec / i grec</td>
          </tr>
          <tr>
            <td>Z, z</td>
            <td>ze / zet / zed / zî</td>
          </tr>
        </table>

      </section>
    </div>

    <footer>
      <a href="https://twitter.com/alexmarginean16"><img src="../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/alexandru.marginean.9"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/aldea.paul.7"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2017 Paul Aldea.&nbsp; <!--Alex Marginean--></p>
      <p>Alex Marginean</p>
    </footer>
