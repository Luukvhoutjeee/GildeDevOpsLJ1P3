<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "gilde_devops_uren";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Verbinding met database mislukt: " . mysqli_connect_error());
}
?>