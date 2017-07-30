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

    <?php
        if(isset($_SESSION['message']))
        {
             echo "<div id='error_msg'>".$_SESSION['message']."</div>";
             unset($_SESSION['message']);
        }
    ?>

    <div id="wrapper">
      <section>

        <center><h3 style="color: #6ab47b">Scrierea și citirea numerelor de la 0 la 1000</h3></center>
        <p>în sistemul zecimal de scriere al numerelor:</p>
        <ul id="enumer">
          <li><p>10 untitați = o zece</p></li>
          <li><p>10 zeci =  o suta</p></li>
          <li><p>10 sute = o mie</p></li>
        </ul>
        <p>ex: 7654321</p>

        <center>
          <h3 style="color: #6ab47b">Adunarea și scaderea numerelor fără trecerea</h3>
          <h3 style="color: #6ab47b">peste ordin a numerelor de la 0 la 1000000</h3>
        </center>
        <p>Adunarea este o operație aritmetică elementară care totalizează două sau mai multe numere, numite „termenii adunării” într-o singură valoare, numită suma sau „totalul” numerelor respective.</p>
        <ul id="enumer">
          <li>a)	23745 + 576 = 24321</li>
          <li>b)	56478 + 4268 = 66323</li>
          <li>c)	5878+ 9845 = 15720</li>
          <li>d)	45147 + 568 = 45715</li>
          <li>e)	58471 + 574 = 59045</li>
          <li>f)	58465 – 4265 = 54200</li>
          <li>g)	5614-14 = 5600</li>
          <li>h)	4589-985 = 3604</li>
        </ul>

        <center><h3 style="color: #6ab47b">Înmulțirea</h3></center>
        <p>Înmulțirea este o operație matematică ce poate fi definită ca o adunare succesivă. De exemplu: 3×4=3+3+3+3=12. Înmulțirea poate fi reprezentată cu ajutorul mai multor semne grafice</p>
        <p>Poate fi notata cu: "×", "·" sau "*"</p>
        <p>ex: </p>
        <ul id="enumer">
          <li>3×4=12</li>
          <li>3·4=12</li>
          <li>3*4=12</li>
        </ul>

        <table>
          <tr id="table">
            <th>1</th>
            <th>&nbsp;2</th>
            <th>&nbsp;3</th>
            <th>&nbsp;4</th>
            <th>&nbsp;5</th>
            <th>&nbsp;6</th>
            <th>&nbsp;7</th>
            <th>&nbsp;8</th>
            <th>&nbsp;9</th>
            <th>&nbsp;10</th>
          </tr>
          <tr>
            <th id="table">2</th>
            <td id="table2">&nbsp;4</td>
            <td>&nbsp;6</td>
            <td>&nbsp;8</td>
            <td>10</td>
            <td>12</td>
            <td>14</td>
            <td>16</td>
            <td>18</td>
            <td>20</td>
          </tr>
          <tr>
            <th id="table">3</th>
            <td>&nbsp;6</td>
            <td id="table2">9</td>
            <td>12</td>
            <td>15</td>
            <td>18</td>
            <td>21</td>
            <td>24</td>
            <td>27</td>
            <td>30</td>
          </tr>
          <tr>
            <th id="table">4</th>
            <td>&nbsp;8</td>
            <td>12</td>
            <td id="table2">16</td>
            <td>20</td>
            <td>24</td>
            <td>28</td>
            <td>32</td>
            <td>36</td>
            <td>40</td>
          </tr>
          <tr>
            <th id="table">5</th>
            <td>&nbsp;10</td>
            <td>15</td>
            <td>20</td>
            <td id="table2">25</td>
            <td>30</td>
            <td>35</td>
            <td>40</td>
            <td>45</td>
            <td>50</td>
          </tr>
          <tr>
            <th id="table">6</th>
            <td>12</td>
            <td>18</td>
            <td>24</td>
            <td>30</td>
            <td id="table2">36</td>
            <td>42</td>
            <td>48</td>
            <td>54</td>
            <td>60</td>
          </tr>
          <tr>
            <th id="table">7</th>
            <td>14</td>
            <td>21</td>
            <td>28</td>
            <td>35</td>
            <td>42</td>
            <td id="table2">49</td>
            <td>56</td>
            <td>63</td>
            <td>70</td>
          </tr>
          <tr>
            <th id="table">8</th>
            <td>16</td>
            <td>24</td>
            <td>32</td>
            <td>40</td>
            <td>48</td>
            <td>56</td>
            <td id="table2">64</td>
            <td>72</td>
            <td>80</td>
          </tr>
          <tr>
            <th id="table">9</th>
            <td>18</td>
            <td>27</td>
            <td>36</td>
            <td>45</td>
            <td>54</td>
            <td>63</td>
            <td>72</td>
            <td id="table2">81</td>
            <td>90</td>
          </tr>
          <tr>
            <th id="table">10</th>
            <td>20</td>
            <td>30</td>
            <td>40</td>
            <td>50</td>
            <td>60</td>
            <td>70</td>
            <td>80</td>
            <td>90</td>
            <td id="table2">100</td>
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
