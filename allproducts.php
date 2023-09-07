
<?php
require('config.php');

$sql = "select * from `products`";
$data = mysqli_query($connection, $sql);
if (mysqli_num_rows($data) > 0){

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
<table class="table table-bordered text-center">
<thead class="table table-dark">
<tr>
<th> Id </th>
<th> Name</th>
<th> Discription </th>
<th> Category </th>
<th> Image </th>
<th> Status </th>
<th> Update </th>
<th> Delete </th>
</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['discription']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['image']; ?></td>
<td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-warning"> UPDATE </a></td>
<td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-warning"> Delete </a></td>
</tr>
<?php
}
}
?>
</tbody>

</table>
</body>
</html>