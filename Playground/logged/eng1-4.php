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
    <style>
      td {
        padding-left: 0.5em;
        padding-right: 1.8em;
      }

      #mg {
        /*position: fixed;*/
        /*left: 400px;*/
      }
    </style>
  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <h1>Playground</h1>
        <h2>Joaca | Invata | Testeaza-ti cunostintele</h2>
      </a>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
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

        <!--<div style="margin-bottom: 30px">-->
        <center><h3 style="color: #6ab47b">Alfabetul limbii engleze</h3></center>
        <p><strong>Alfabetul englez </strong>(the alphabet) contine 26 de litere, dintre care 5 vocale (a, e, i, o, u), 2 semivocale (w, y) si 19 consoane.Literele alfabetului, luate singure, se citesc in felul urmator: </p>

        <table>
          <tr>
            <td>a [ei]</td>
            <td>h [eitş]</td>
            <td>o [ou]</td>
            <td>v [vi]</td>
          </tr>
          <tr>
            <td>b [bi]</td>
            <td>i [ai]</td>
            <td>p [pi]</td>
            <td>w [dʌblj]</td>
          </tr>
          <tr>
            <td>c [si]</td>
            <td>j [djei]</td>
            <td>q [kju]</td>
            <td>x [eks]</td>
          </tr>
          <tr>
            <td>d [di]</td>
            <td>k [kei]</td>
            <td>r [aã]</td>
            <td>y [uai]</td>
          </tr>
          <tr>
            <td>e [i]</td>
            <td>l [el]</td>
            <td>s [es]</td>
            <td>z [zed]</td>
          </tr>
          <tr>
            <td>f [ef]</td>
            <td>m [em]</td>
            <td>t [ti]</td>
            <td> </td>
          </tr>
          <tr>
            <td>f [ef]</td>
            <td>m [em]</td>
            <td>t [ti]</td>
            <td> </td>
          </tr>
          <tr>
            <td>g [dji]</td>
            <td>n [en]</td>
            <td>u [iu]</td>
            <td> </td>
          </tr>
        </table>
      <!--</div>-->

        <center><h3 style="color: #6ab47b">Culorile in engleza</h3></center>

        <img src="../img/colors.jpg" style="float: right; padding-right: 20px; width: 298px; height: 322px" alt="colors" />

        <p style="color:lightgrey">alb = white { uait }</p>
        <p style="color:Grey">gri = grey { grei }</p>
        <p style="color:Black">negru = black { bleac }</p>
        <p style="color:Blue">albastru = blue { blu }</p>
        <p style="color:Red">rosu = red { red }</p>
        <p style="color:Pink">roz =  pink { pinc }</p>
        <p style="color:Purple">mov = purple { părpăl }</p>
        <p style="color:Orange">portocaliu = orange { orengi }</p>
        <p style="color:Yellow">galben = yellow { ielou }</p>
        <p style="color:Green">verde = green { grin }</p>
        <p style="color:Brown">maro = brown { braun }</p>

        <center><h3 style="color: #6ab47b">Numerele în limba engleză</h3></center>

        <table>
          <tr>
            <td>0</td>
            <td>Zero</td>
            <td>Zero</td>
          </tr>
          <tr>
            <td>1</td>
            <td>One</td>
            <td>Unu</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Two</td>
            <td>Doi</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Three</td>
            <td>Trei</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Four</td>
            <td>Patru</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Five</td>
            <td>Cinci</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Six</td>
            <td>Sase</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Seven</td>
            <td>Sapte</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Eight</td>
            <td>Opt</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Nine</td>
            <td>Noua</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Ten</td>
            <td>Zece</td>
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
