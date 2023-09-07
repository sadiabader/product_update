<?php
require('config.php');

if(isset($_POST['submit'])){
    $img_name = $_POST['pname'];
    $img_desc = $_POST['pdesc'];
    $img_cat = $_POST['pcat'];
    $img_img = $_FILES['pimg']['name'];
    $img_tmp = $_FILES['pimg']['tmp_name'];
    $img_size = $_FILES['pimg']['size'];

$insert = "INSERT INTO `products` (`name`, `discription`, `category`, `image`)
 VALUES ('$img_name', '$img_desc', '$img_cat', '$img_img')";

$query = mysqli_query($connection, $insert);
// if($query){
//     if(mysqli_num_rows($query) > 0){
//         echo "<script> alert('record already exist'); </script>";
//     }else{
//         $insert = ""
//     }
 
move_uploaded_file($img_tmp , 'imgupload/' . $img_img);
if(!$query){
    echo "query failed";
}
header('location:http://localhost/products/allproducts.php');
}



// update





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

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-group" enctype="multipart/form-data">

<label for="pname"> Name</label>
<input type="text" name="pname" class="form-control">
<label for="pdesc"> Description</label>
<input type="text" name="pdesc" class="form-control">
<label for="pcat"> Category</label>
<input type="text" name="pcat" class="form-control">
<label for="pimg"> Image</label>
<input type="file" name="pimg" class="form-control">
<input type="submit" name="submit">

</form>

</div>
</body>
</html>