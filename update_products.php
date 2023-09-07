

<?php
require('config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$cat = $_POST['cat'];
$img= $_FILES['img'];
$tmp = $_FILES['tmp'];
$size = $_FILES['size'];

$update = "update `products` set pname = '$name', pdesc = '$desc', pcat ='$pcat',
 pimg ='$img', ptmp = '$tmp', psize = '$size' where pid = '$id'";
 
$result = mysqli_query($connection, $update);
if(!$result){
    die("query failed");
}
header('location:http://localhost/products/pro_upload.php');
?>



