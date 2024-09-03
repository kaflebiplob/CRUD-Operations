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

        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Enter books">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Enter Author name">
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control" id="">
                    <option value="">Select Book Type</option>
                    <option value="">Adventure</option>
                    <option value="">ScFi</option>
                    <option value="">Thriller</option>
                    <option value="">Horror</option>
                    <option value="">Love Story</option>


                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="desc" placeholder="Enter description">
            </div>
            <div class="form-element my-4">
                <input type="submit" class="btn btn-success" name="btn" value="Add Book">
            </div>

        </form>
    </div>

</body>

</html>