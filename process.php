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
        session_start();
        $_SESSION["btn"] = "Book Added succesfully";
        header("Location:index.php");
    } else {
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($connection, $_POST["title"]);
    $author = mysqli_real_escape_string($connection, $_POST["author"]);
    $type = mysqli_real_escape_string($connection, $_POST["type"]);
    $description = mysqli_real_escape_string($connection, $_POST["desc"]);
    $id = mysqli_real_escape_string($connection, $_POST["id"]);

    $sql = "UPDATE books SET title = '$title', author='$author', type = '$type',description= '$description' WHERE id = '$id' ";
    $status =  mysqli_query($connection, $sql);
    if ($status) {
        session_start();
        $_SESSION['edit'] = "Book Edited succesfully";
        header("Location: index.php");
    } else {
        die("Something went wrong");
    }
}
