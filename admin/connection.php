<?php 

$server = "localhost";
$username = 'root';
$passowrd = "";
$dbName = "ittakeshopping_project";

$conn = mysqli_connect($server, $username, $passowrd, $dbName);

if (!$conn) {
    die("Sorry we cannot connect :".mysqli_connect_error());
}


?>