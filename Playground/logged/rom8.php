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
    <style>
      #mij{
        width: 300px;
      }
      #sus {
        padding-right: 1em;
      }
      table {
        margin: 0 auto;
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
          <li><a href="index.php">Acasa</a></li>
          <li><a href="about.php">Despre</a></li>
          <li><a href="contact.php">Contact</a></li><li>
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

        <center><h3 style="color: #6ab47b">Cazurile și funcțiile sintactice ale substantivulu</h3></center>
        <p>     Substantivul poate avea în propoziție diferite funcții sintactice: subiect, atribut, complement, nume predicativ. Atunci când îndeplinește aceste funcții sintactice, substantivul își schimbă forma (casa, casei, al casei, pe casă) – primește în construcția sa un articol hotărât, articolul al, a, ai, ale sau o prepoziție.</p>
        <p>     oate aceste forme pe care le poate lua un substantiv, pentru a exprima în propoziție diferite funcții sintactice, se numesc cazuri, iar formele acestor cazuri poartă denumirea de forme cauzale. Toate formele și construcțiile cauzale ale unui substantiv formează declinarea acelui substantiv.</p>
        <p>     În limba română substantivul are cinci cazuri: nominativ, acuzativ, genitiv, dativ, vocativ. În general, cazurile se stabilesc cu ajutorul întrebărilor.</p>

        <table>
          <tr>
            <td id="sus"><strong>Caz</strong></td>
            <td><strong>Întrebări posibile</strong></td>
            <td><strong>Funcții sintactice posibile</strong></td>
          </tr>
          <tr>
            <td id="sus">nominativ</td>
            <td id="mij">cine? ce? care?</td>
            <td id="mij">subiect, nume predicativ, atribut</td>
          </tr>
          <tr>
            <td id="sus">acuzativ</td>
            <td id="mij">ce? pe cine? pe ce? cu cine? cu ce? la cine? la ce? despre cine? despre ce? lângă cine? lângă ce? de la cine? de la ce? unde? de unde? până unde? când? cum? care? ce fel de?</td>
            <td id="mij">complement direct, complement indirect, complement de agent, atribut substantival prepozițional, nume predicativ, complement circumstanţial de loc, complement circumstanțial de timp, complement circumstanțial de mod, complement circumstanțial de scop</td>
          </tr>
          <tr>
            <td id="sus">genitiv</td>
            <td id="mij">al cui? a cui? ai cui? ale cui?</td>
            <td id="mij">atribut substantival genitival, atribut substantival prepoziţional, atribut substantival apoziţional, nume predicativ, complement indirect, complement circumstanțial de timp, complement circumstanțial de loc, complement circumstanțial de mod, complement circumstanțial de scop</td>
          </tr>
          <tr>
            <td id="sus">dativ</td>
            <td id="mij">cui?</td>
            <td id="mij">atribut substantival prepoziţional, atribut apoziţional, nume predicativ, complement indirect, complement circumstanțial de mod, complement circumstanțial de cauză</td>
          </tr>
          <tr>
            <td id="sus">Vocativ</td>
            <td id="mij">-</td>
            <td id="mij">-</td>
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
