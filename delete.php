<?php 
if(isset($_GET["id"])){
    $id = $_GET['id'];
    include("connectDatabase.php");
    $sql = "DELETE FROM  books  WHERE  id = $id";
    if(mysqli_query($connection,$sql)){
        echo "deleted";
    }
}
?>