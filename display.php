<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deaprtment managment</title>
     <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div style="background-color: aqua;">
    <h1 style="text-align: center;">Resurent in Gopalganj</h1>
  </div>
    <div class="container1">
        <button class="btn1 btn-primary1 margin-5"><a href="/resturent/user.php" class="text-light1">Add Resturent</a>
    </button>
    <button class="btn1 btn-primary1 margin-5"><a href="/resturent/search.php" class="text-light1">Search</a>
    </button>
    <table class="table1">
  <thead>
    <tr>
      <th scope="col">Resturent id</th>
      <th scope="col">Resturent name</th>
      <th scope="col">Location</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">owner_name</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql="Select * from resturent_tb";
      $result=mysqli_query($con,$sql);
      if($result){
         while($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $name=$row['name'];
              $location=$row['location'];
              $phone=$row['phone'];
              $email=$row['email'];
              $owner_name=$row['owner_name'];
              echo '<tr>
              <td>'.$id.'</td>
              <td>'.$name.'</td>
              <td>'.$location.'</td>
              <td>'.$phone.'</td>
              <td>'.$email.'</td>
              <td>'.$owner_name.'</td>
              <td>
              <button class="btn1 btn-primary1"><a href="/resturent/view.php? updateid='.$id.'" class="text-light1">View</a></button>
                <button class="btn1 btn-primary1"><a href="/resturent/update.php? updateid='.$id.'" class="text-light1">Update</a></button>
                <button class="btn1 btn-danger1"><a href="/resturent/delete.php? deleteid='.$id.'" class="text-light1">Delate</a></button>
            </td>
              </tr>';
         }
      }
      ?>
  </tbody>
</table> </div> </body> </html>