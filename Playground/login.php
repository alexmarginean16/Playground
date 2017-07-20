<?php
$ok = 1;
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['login_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password=md5($password); //Remember we hashed password before storing last time
    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$username;
        header("location:logged/index.php");
    }
   else
   {
        $_SESSION['message']='<div style="border: 1px Solid Red; margin:0 auto; width: 940px; padding-bottom: 50px; background: #f98484; color: Black"><center>"Numele de utilizator sau parola sunt incorecte"</center></div>';
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
          <li><a href="index.html">Acasa</a></li>
          <li><a href="about.html">Despre</a></li>
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
        <!--<div id="log">
          <center><h3 style="color: #6ab47b; font-size: 40px;">Log in</h3></center>
          <hr style="margin-bottom: 30px; width: 340px;">

            <form method="post" action="login.php">
              <div id="logform">
              Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" name="email" id="tem"><br>
              Password:&nbsp;
              <input type="text" name="password" id="tem">
              <hr style="margin-bottom: 30px; width: 340px">
              <center><input type="submit" name="sumbit" value"Log in" id="conn" /></center>
              </div>
            </form>

            <div id="foot">
              Nu ai cont?<br><a href="#">Creaza-ti un cont nou</a>
            </div>

        </div>-->
        <div id="log">

        <center><h3 style="color: #6ab47b; font-size: 40px;">Log in</h3></center>
        <hr style="margin-bottom: 30px; width: 340px;">

        <form method="post" action="login.php">
        	<div id="logform">
  				<table id="ltb">
     				<tr>
           				<td id="opa">Utilizator : </td>
           				<td><input type="text" name="username" id="tem"></td>
     				</tr>
      				<tr>
           				<td>Parola : </td>
           				<td><input type="password" name="password" id="tem"></td>
     				</tr>
      				<tr>
           				<td></td>
           				<td><input type="submit" name="login_btn" id="conn" value="Logare"></td>
     				</tr>

				</table>
			</div>

			<hr style="margin-bottom: 30px; width: 340px">

			<div id="foot">
            	Nu ai cont?<br><a href="register.php">Creaza-ti un cont nou</a>
            </div>
		</form>
		</div>

		</section>
    </div>


    <footer>
      <a href="https://twitter.com/alexmarginean16"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/alexandru.marginean.9"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <a href="https://www.facebook.com/aldea.paul.7"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2017 Paul Aldea.&nbsp; <!--Alex Marginean--></p>
      <p>Alex Marginean</p>
    </footer>
</body>
</html>
