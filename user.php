<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $location=$_POST['location'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $owner_name=$_POST['owner_name'];
  $sql="insert into resturent_tb(id,name,location,phone,email,owner_name) values('$id','$name','$location','$phone','$email','$owner_name')";
  $result=mysqli_query($con,$sql);
  if($result){
     //echo "Data inserted succesfully";
      header('Location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
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
      <h1 style="text-align: center;">Insert Informaiton of Resturent</h1>
    </div>
    <div class="container1">
  <form method="post">
  <div class="form-group1">
  <div class="form-group1">
    <label>Resturent name</label>
    <input type="text" class="form-control1" placeholder="Enter resturent name" name="name">
  </div>
  <div class="form-group1">
    <label>location</label>
    <input type="text" class="form-control1" placeholder="Enter location" name="location">
  </div>
  <div class="form-group1">
    <label>Phone number</label>
    <input type="text" class="form-control1" placeholder="Enter phone number" name="phone">
  </div>
  <div class="form-group1">
    <label>Email</label>
    <input type="text" class="form-control1" placeholder="Enter email" name="email">
  </div>
  <div class="form-group1">
    <label>Owner name</label>
    <input type="text" class="form-control1" placeholder="Enter name of owner" name="owner_name">
  </div>
  <button type="submit" class="btn1 btn-primary1" name="submit">Submit</button>
   <button class="btn1 btn-primary1"><a href="display.php" class="text-light1">Back</a></button>
</form>
</div>
  </body>
</html>