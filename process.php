<?php
include("connectDatabase.php");
if (isset($_POST["btn"])) {
    $title = mysqli_real_escape_string($connection, $_POST["title"]);
    $author = mysqli_real_escape_string($connection, $_POST["author"]);
    $type = mysqli_real_escape_string($connection, $_POST["type"]);
    $description = mysqli_real_escape_string($connection, $_POST["desc"]);

    $sql = "INSERT INTO books (title, author,type, description) VALUES ('$title','$author','$type','$description')";
   $status =  mysqli_query($connection, $sql);
    if ($status) {
        echo "record inserted";
    } else {
        die("sorry");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($connection, $_POST["title"]);
    $author = mysqli_real_escape_string($connection, $_POST["author"]);
    $type = mysqli_real_escape_string($connection, $_POST["type"]);
    $description = mysqli_real_escape_string($connection, $_POST["desc"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

$sql = "UPDATE books SET title = '$title', author='$author', type = '$type',description= '$description' WHERE id =$id ";
   $status =  mysqli_query($connection, $sql);
    if ($status) {
        echo "record updated";
    } else {
        die("sorry");
    }
}
?>

