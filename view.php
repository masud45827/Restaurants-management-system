<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from resturent_tb where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$location=$row['location'];
$phone=$row['phone'];
$email=$row['email'];
$owner_name=$row['owner_name'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="./style.css">
    <title>Resturent in Gopalganj</title>
  </head>
  <body>
  <div style="background-color: aqua;">
      <h1 style="text-align: center;">View Informaiton</h1>
    </div>
    <div class="container1 margin-5">
        <div>
      <h1> Resturant name: <?php echo $name;?><h1>
</div>
<div class="container1 margin-5">
    <div>
        <div>
      <h1> Lcation: <?php echo $location;?><h1>
</div>
<div class="container1 margin-5">
        <div>
      <h1> Phone Number: <?php echo $phone;?><h1>
</div>
<div class="container1 margin-5">
        <div>
      <h1> Email: <?php echo $email;?><h1>
</div>
<div class="container1 margin-5">
        <div>
      <h1> Owner Name: <?php echo $owner_name;?><h1>
</div>
</div>
</div>
  </body>
</html>