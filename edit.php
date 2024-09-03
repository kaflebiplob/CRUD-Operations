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
    <h1>Edit Book</h1>
    <div>
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
</header>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include("connectDatabase.php");
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result);
}
?>
    <form action="process.php" method="post">
        <div class="form-element my-4">
            <input type="text" class="form-control" name="title" placeholder="Enter books" value="<?php echo $row["title"]; ?>">
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="author" placeholder="Enter Author name" value="<?php echo $row["author"]; ?>">
        </div>  
        <div class="form-element my-4">
            <select name="type" class="form-control" id="" value="<?php echo $row["type"]; ?>">
                <option value="" >Select Book Type</option>
                <option value=""  <?php if($row["type"]=="Adventure"){echo "selected";} ?>>Adventure</option>
                <option value=""  <?php if($row["type"]=="ScFi"){echo "selected";} ?>>ScFi</option>
                <option value=""  <?php if($row["type"]=="Thriller"){echo "selected";} ?>>Thriller</option>
                <option value=""  <?php if($row["type"]=="Horror"){echo "selected";} ?>>Horror</option> 
                <option value=""  <?php if($row["type"]=="Love Story"){echo "selected";} ?>>Love Story</option> 


            </select>
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="desc" placeholder="Enter description" value="<?php echo $row["description"]; ?>">
        </div>
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <div class="form-element my-4">
            <input type="submit" class="btn btn-success" name="edit" value="Edit Book">
        </div>
        
    </form>
    </div>

</body>

</html>