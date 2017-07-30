<?php
$ok = 1;
session_start();
include 'config.php';
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
        header("location:../logged/index.php");

    }
   else
   {
        header("location:../er.html");
   }
}
?>
