<?php
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    include("connectDatabase.php");
    $sql = "DELETE FROM  books  WHERE  id = $id";
    if (mysqli_query($connection, $sql)) {
        session_start();
        $_SESSION["delete"] = "Book deleted succesfully";
        header("Location:index.php");
    }
}
