<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add Book</a>
            </div>
        </header>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connectDatabase.php");
                $sql = "SELECT * FROM books";
                $result = mysqli_query($connection, $sql);
               
                while ( $row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td> <?php echo $row["id"]; ?></td>
                        <td> <?php echo $row["title"]; ?></td>
                        <td> <?php echo $row["author"]; ?></td>
                        <td> <?php echo $row["type"]; ?></td>
                        <td> <?php echo $row["description"]; ?></td>
                        <td>
                            <a href="" class="btn btn-info">read more</a>
                            <a href="" class="btn btn-warning">edit</a>
                            <a href="" class="btn btn-danger">delete</a>

                        </td>

                    </tr>

                <?php

                }
                ?>
            </tbody>

        </table>
    </div>

</body>

</html>