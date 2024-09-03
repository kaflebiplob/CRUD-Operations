<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Book details</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details">
            <?php
            if (isset($_GET['id'])) {
                include("connectDatabase.php");
                $id = $_GET["id"];
                $sql = "SELECT * FROM books WHERE  id= '$id'";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_array($result);
            ?>
                <h3>Title:</h3>
                <p><?php echo $row["title"]; ?></p>
                <h3>Description:</h3>
                <p><?php echo $row["description"]; ?></p>
                <h3>Author:</h3>
                <p><?php echo $row["author"]; ?></p>
                <h3>Type:</h3>
                <p><?php echo $row["type"]; ?></p>
            <?php
            }


            ?>
        </div>
    </div>

</body>

</html>