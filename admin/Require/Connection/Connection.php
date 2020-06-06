<?php
$hostname = "localhost";
$username= "root";
$pwd= "";
$db = "TheMobileShop";
$conn = mysqli_connect($hostname,$username,$pwd,$db);
if (!$conn)
{
    die(mysqli_connect_error());
}
?>