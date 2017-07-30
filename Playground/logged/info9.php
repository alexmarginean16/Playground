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

        <h3 style="color: #6ab47b">Pseudocod. Date. Expresii </h3>
        <p>Cuvantul pseudocod provine din pseudo, care inseamna fals,  si cod care se refera la textul scris intr-un limbaj de programare. Deci pseudocod inseamna un asa-zis limbaj de programare.
Pseudocodul foloseste aceeasi operatori si o exprimare  la relaxata fata de un limbaj consacrat , care cere rigurozitate.
Pseudocodul, ca orice limbaj, foloseste date, variabile, operatii si instructiuni.
Pentru doritori, va prezint o varianta de pseudocod apropiata de cea din manual, limbajul Rodin a domnului profesor Dan Popa de la Univeristatea Bacau. In acest fel puteti pigmenta orele de informatica din clasa a 9-a si cu ore de laborator. </p>
        <h3 style="color: #6ab47b">Date</h3>
        <p>Datele cu care lucreaza un algoritm (scris in pseudocod) sunt:</p>
        <ul>
          <li>valori intregi: 12, -5, 17</li>
          <li>valori reale: 3.14, -1005.25, … ; observati ca folosim punct zecimal si nu virgula ca in notatia de la matematica</li>
          <li>valori logice: adevarat (true) si fals (false)</li>
          <li>siruri de caractere: “introdu valoarea:”, “rezultatul este:”</li>
        </ul>
        <h3 style="color: #6ab47b">Variabile</h3>
        <p>O variabila este un simbol care se caracterizeaza prin:</p>
        <ul>
          <li>nume; se noteaza cu combinatii de litere sau cifre dar intotdeauna primul caracter este litera: a, Beta, nr1, nr2</li>
          <li>tip de data: intreg, real, sir de caractere, logic</li>
          <li>valoare: functie de tipul de data asociat, o variabila poate avea valori din cele de mai sus; valoarea memorata se poate schimba, de unde si numele de variabila;</li>
        </ul>
        <p>Practic, o variabila se comporta ca o cutie  ce poate fi folosita doar pentru ceva anume: valorile intregi in cutii pentru valori intregi si valori reale in cutii pentru valori reale; doar nu puneti zahar intr-o cutie de pantofi. :).</p>
        <p>Din acest motiv, la inceputul algoritmului nostru in pseudocod trebuie sa specificam cu ce variabile lucram si ce tip au, ca in exemplul de mai jos:</p>
        <p>intreg m,n</p>
        <p>real x,y.z</p>
        <p>logic ok, exista, este</p>

        <h3 style="color: #6ab47b">Expresii</h3>
        <p>Expresiile sunt formate din operatori si operanzi. Formeaza expresie urmatoarele</p>
        <ul>
          <li>o variabila</li>
          <li>variabila operator variabila</li>
          <li>expresie operator expresie</li>
          <li>operator expresie (cazul operatorilor unari  de genul  – (5+3) )</li>
        </ul>

        <p>Dintre operatorii folositi vom vorbi acum numai de cei intregi (care se folosesc numai pentru operanzi intregi):</p>

        <ul>
          <li>semnul ” – ” se foloseste pentru scaderi sau ca operator unar</li>
          <li>semnul ” + ” se foloseste pentru adunari</li>
          <li>semnul  ” * ” se foloseste pentru inmultiri</li>
          <li>semnul ” / ” se foloseste pentru impartiri</li>
          <li>semnul ” % ” se foloseste pentru a obtine restul impartirii primului operand la cel de al doilea
                <ul>
                  <li>a % b = restul impartirii lui a la b</li>
                  <li>a % 2 = restul impartirii lui a la 2, care este 1 daca a este impar si 0 daca a este par</li>
                  <li>a % 10 = restul impartirii lui a la 10, care este intotdeauna ultima cifra a lui a, cifra unitatilor</li>
                </ul>
          </li>
          <li>prioritatea operatiilor este aceeasi ca in matematica; mai intai inmultirile si impartirile si apoi adunarile si scaderile</li>
          <li>se pot folosi si paranteze pentru expresiile mai complicate, dar numai perechide paranteze rotunde</li>
          <li>atentie la ordinea operatiilor si folosirea parantezelor rotunde (ex. ecuatia de gradul 2):
                <ul>
                  <li>x1=-b+ radical(b*b-4*a*c)/2*a</li>
                  <li>x1=(-b+ radical(b*b-4*a*c))/2*a</li>
                  <li>x1=(-b+ radical(b*b-4*a*c))/(2*a)</li>
                </ul>
          </li>
          <li>care din variantele de mai sus este corecta?
                <ul>
                  <li>prima imparte numai radicalul la 2, rezultatul este inmultit cu a si apoi se efectueza scaderea</li>
                  <li>al doilea exemplu pune parantezele pentru numarator dar imaprte numai la 2, rezultatul impartirii fiind inmultit cu a</li>
                  <li>abia ultima varianta separa numitorul si numaratorul prin paranteze</li>
                </ul>
          </li>
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
