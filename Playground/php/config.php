<?php

$db=mysqli_connect("localhost","root","","authentication");


// Banuti

$results = mysqli_query($db,"SELECT coins FROM users WHERE username = '".$_SESSION['username']."'");
while ($row = mysqli_fetch_array($results))
{
$coins = $row['coins'];
}
$_SESSION['coins'] = $coins;

?>
