<?php
session_start();
include '../php/config.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Imagine reala sau fake
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Exista deja?
if (file_exists($target_file)) {
    $uploadOk = 0;
}
// Formatul bun
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}
// daca a intervenit o problema
if ($uploadOk == 0) {
    header("location:failed.html");
// daca totul e ok..
} else {
  if($_SESSION['coins'] >= 10) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      header("location:success.html");
      mysqli_query($db,"UPDATE users SET coins = coins - 10 WHERE username = '".$_SESSION['username']."'");

    } else {
      header("location:failed.html");
    }
}
else {
    header("location:failed.html");
}
}
?>
