

<?php
session_start();
$db=mysqli_connect("localhost","root","","authentication");

$results = mysqli_query($db,"SELECT coins FROM users WHERE username = '".$_SESSION['username']."'");
while ($row = mysqli_fetch_array($results))
{
$coins = $row['coins'];
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo '<center>';
        echo "Fisierul este o imagine - " . $check["mime"] . ".";
        echo '</center>';
        $uploadOk = 1;
    } else {
        echo '<center>Fisierul nu este o imagine.</center>';
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo '<center>';
    echo "Imi pare rau, aceasta poza exista deja.  ";
    echo '</center>';
    $uploadOk = 0;
}
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<center>';
    echo "Ai voie sa uploadezi doar poze in format JPG, JPEG, PNG & GIF  ";
    echo '</center>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<br><br><div style="color: Black; border: 1px Solid Red; width: 940px; margin:0 auto; padding-top: 40px; padding-bottom: 40px; background: #f98484">';
    echo '<center>Fisierul tau nu a fost incarcat.</center>';
    echo '</div><br><br>';
// if everything is ok, try to upload file
} else {
  if($coins >= 10) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        echo '<br><br><div style="color: Black; border: 1px Solid Green; width: 940px; margin:0 auto; padding-top: 40px; padding-bottom: 40px; background: lightgreen">';
        echo '<center>';
        echo "Fisierul ". basename( $_FILES["fileToUpload"]["name"]). " a fost incarcat.";
        echo '</center>';
        echo '</div><br><br>';

        mysqli_query($db,"UPDATE users SET coins = coins - 10 WHERE username = '".$_SESSION['username']."'");
    } else {
        echo '<br><br><div style="color: Black; border: 1px Solid Red; width: 940px; margin:0 auto; padding-top: 40px; padding-bottom: 40px; background: #f98484">';
        echo "A intervenit o problema la incarcarea fisierului.  ";
        echo '</div><br><br>';
    }
}
else {
    echo '<center>';
    echo "Ai nevoie de cel putin 10 banuti pentru a incarca o fotografie.  ";
    echo '</center>';

    echo '<br><br><div style="color: Black; border: 1px Solid Red; width: 940px; margin:0 auto; padding-top: 40px; padding-bottom: 40px; background: #f98484">';
    echo '<center>Fisierul tau nu a fost incarcat.</center>';
    echo '</div><br><br>';
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/main.css">
  <title>Incarcare</title>
</head>
<body>
  <!--<a href="post.php">Inapoi la postari.</a>-->
  <center><button id="conn" onclick="window.location.href='post.php'">Inapoi la postari.</button></center>
</body>
</html>
