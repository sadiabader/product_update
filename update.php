
<?php
include('config.php');


$id = $_GET['Id'];
$sqlquery = "select * from `products` where id = '$id'";
$res = mysqli_query($connection, $sqlquery);
if(!$res){
    die("query failed");
}
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<input type="text" name="pdesc" class="form-control" >
<label for="pcat"> Category</label>
<input type="text" name="pcat" class="form-control">
<label for="pimg"> Image</label>
<input type="file" name="pimg" class="form-control">
<input type="submit" name="submit">

</form>
</div>
<?php
    }
}
?>
</body>
</html>

