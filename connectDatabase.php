<?php
$dbhostName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crud";
$connection = mysqli_connect($dbhostName,$dbUser,$dbPass,$dbName);
if (!$connection) {
    die("Somenthing went Wrong");
}
else{

}
?>