<?php
session_start();
include 'config.php';
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
            header("location:../logged/index.php");  //redirect home page
    }
    else
    {
      header("location: ../err.html");
    }
}
?>
