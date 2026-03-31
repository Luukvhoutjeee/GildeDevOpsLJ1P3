<?php
$host = "localhost";
$user = "root";
$pass = "Gilde123"; 
$db   = "gildedevops";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Verbinding met database mislukt: " . mysqli_connect_error());
}
?>