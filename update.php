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
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $location=$_POST['location'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $owner_name=$_POST['owner_name'];
  $sql="update resturent_tb set name='$name',location='$location',phone='$phone',email='$email',owner_name='$owner_name' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
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
      <h1 style="text-align: center;">Update Information of Resturent</h1>
    </div>
    <div class="container1 margin-5">
  <form method="post">
  <div class="form-group1">
    <label>Resturent name</label>
    <input type="text" class="form-control1" placeholder="Enter Resturent name" name="name" value="<?php echo $name;?>">
  </div>
  <div class="form-group1">
    <label>location</label>
    <input type="text" class="form-control1" placeholder="Enter location" name="location"value="<?php echo $location;?>">
  </div>
  <div class="form-group1">
    <label>phone</label>
    <input type="text" class="form-control1" placeholder="Enter phone number" name="phone" value="<?php echo $phone;?>">
  </div>
  <div class="form-group1">
    <label>Email</label>
    <input type="text" class="form-control1" placeholder="Enter email" name="email" value="<?php echo $email;?>">
  </div>
  <div class="form-group1">
    <label>Onwer name</label>
    <input type="text" class="form-control1" placeholder="Enter onwer name" name="owner_name" value="<?php echo $owner_name;?>">
  </div>
  <button type="submit" class="btn1 btn-primary1" name="submit">Update</button>
  <button class="btn1 btn-primary1"><a href="display.php" class="text-light1">Back</a></button>
</form>
</div>
  </body>
</html>