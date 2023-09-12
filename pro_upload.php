<?php
require('config.php');

if(isset($_POST['submit'])){
   // print_r($_FILES);
   $pname = $_POST['pname'];
   $pdes = $_POST['des'];
   $pcat = $_POST['des'];
   $price = $_POST['price'];
   $img_name = $_FILES['img']['name'];
   $img_tmp = $_FILES['img']['tmp_name'];
   $img_size = $_FILES['img']['size'];

$insert = "INSERT INTO `products` (`name`, `description`, `category`, `price`, `image`)
VALUES ('$pname', '$pdes', ' $pcat', '$price', ' $img_name')";
$query = mysqli_query($connection, $insert);
move_uploaded_file($img_tmp , 'imgupload/' . $img_name);
if(!$query){
    echo "query failed";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
    <title>Document</title>
</head>
<body>
   
<div class="container">
<h1><u> Add Product </u></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="form-group">

<input type="hidden" name="p_id" class="form-control">

<label for="name"> Name </label>
<input type="text" name="pname" class="form-control">


<label for="des"> Description </label>
<input type="text" name="des" class="form-control">

<label for="cat"> Category </label>
<input type="text" name="cat" class="form-control">

<label for="price"> Price </label>
<input type="number" name="price" class="form-control">

<label for="img"> Image </label>
<input type="file" name="img" class="form-control">
<br>
<input type="submit" name="submit" value = "Add product" class="btn btn-primary">



</form>
</div>
</body>
</html>