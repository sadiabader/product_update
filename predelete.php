<?php

include('include/config.php');

$user_id = $_GET['p_id'];
$deldata ="DELETE  from product_details where p_id = '$user_id'";
$connection = mysqli_query($conn , $deldata);
if($connection){
    "<script> alert('are you sure?'); </script>";
    header('location:productdata.php');
}

?>