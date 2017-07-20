<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);
     if($password==$password2)
     {           //Create User
            $password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION['message']="Esti acum conectat.";
            $_SESSION['username']=$username;
            header("location:logged/index.php");  //redirect home page
    }
    else
    {
      $_SESSION['message']="Cele doua parole nu coincid.";
     }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Playground | Kids</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="index.html" id="logo">
        <h1>Playground</h1>
        <h2>Joaca | Invata | Testeaza-ti cunostintele</h2>
      </a>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="login.html" class="selected">Login/Sign up</a></li>
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
      <section>

        <div id="log">

        <center><h3 style="color: #6ab47b; font-size: 40px;">Inregistrare</h3></center>
        <hr style="margin-bottom: 30px; width: 340px;">


        <form method="post" action="register.php">
          <div id="logform">
          <table id="ltb">
            <tr>
              <td>Utilizator : </td>
              <td><input type="text" name="username" id="tem"></td>
            </tr>
            <tr>
              <td>Email : </td>
              <td><input type="email" name="email" id="tem"></td>
            </tr>
            <tr>
              <td>Parola : </td>
              <td><input type="password" name="password" id="tem"></td>
            </tr>
            <tr>
              <td id="opa">Repeta parola: </td>
              <td><input type="password" name="password2" id="tem"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="register_btn" id="conn" value="Intregistrare"></td>
            </tr>

          </table>
        </div>

        <hr style="margin-bottom: 30px; width: 340px">

        </form>
      </div>

      </section>
    </div>
  </body>
</html>
