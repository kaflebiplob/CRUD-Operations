<?php
$dbHost = "localhost";
$dbUser ="root";
$dbPass = "";
$dbName = "crud";


$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$connection) {
    die("Somenthing went Wrong");
}
?>