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
        <center><h3 style="color: #6ab47b">Operații cu numere reale<h3></center>
        <p>Intervalele fiind definite ca mulțimi, ele vor păstra toate proprietațile cu mulțimi, pe care le reamintim:</p>
        <p>Reuniunea a două mulțimi:</p>
        <p>A ∪ B = { x ϵ R;  x ϵ A sau x ϵ B}</p>
        <p>Intersecția a două mulțimi:</p>
        <p>A ∩ B = { x ϵ R; x ϵ A și B}</p>
        <p>Diferența a două mulțimi:</p>
        <p>A \ B = {x ϵ R; x ϵ A și x /ϵ B}</p>
        <center><h3 style="color: #6ab47b">Ordinea efectuării operațiilor cu numere reale</h3></center>
        <p>Ordinea efectuării operațiilor cu numere reale este aceeași ca și la numerele raționale, ținând cont și de regulile de calcul cu radicali:</p>
        <ul id="enumer">
          <li>- mai întai calculăm ridicările la putere (operații de ordinul III)</li>
          <li>- apoi efectuăm înmulțirile și împarțirile (operații de ordinul II)</li>
          <li>- la final executăm adunările și scăderile (operații de ordinul I).</li>
        </ul>
        <p>Dacă într-un exercițiu avem si paranteze, efecutam mai întai operațiile din parantezele rotunde, apoi operațiile din parantezele pătrate, apoi din acolade.</p>

        <div id="ec">
        <center><h3>Raționalizarea numitorului</h3></center>
        <p>Raționalizarea numitorului unei fracții este operația prin care transformăm o fracție cu  numitorul irațional într-o fracție cu numitor rațional.</p>
      </div>

        <p>Exemplu:</p>
        <img src="../img/rationalizare.png" id="ec"></img>
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
