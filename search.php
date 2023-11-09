<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="background-color: aqua;">
        <h1 style="text-align: center;">Search Information of Resturent</h1>
      </div>
    <div class="container1 margin-5">
    <form method="post" style="display: flex;">
       <div>
        <input type="text"  class="form-control1" placeholder="Search data" name="search">
       </div> 
       <div>
        <button class="btn1 btn-primary1 cursor1" name="submit">Search</button>
        <button class="btn1 btn-primary1"><a href="display.php" class="text-light1">Back</a></button>
       </div> 
</form>
   <div class="container1 margin-5">
       <table class="table1">
           <?php
       if(isset($_POST['submit'])){
           $search=$_POST['search']; 
           $sql="select * from resturent_tb where id like '%{$search}%' or name like '%{$search}%' or location like '%{$search}%' or phone like '%{$search}%' or email like '%{$search}%' or owner_name like '%{$search}%'";
           $result=mysqli_query($con,$sql);
           if($result){
                if(mysqli_num_rows($result)>0){
                    echo'<thead>
                    <tr>
                    <th scope="col">resturent id</th>
                    <th scope="col">resturent name</th>
                    <th scope="col"> location</th>
                    <th scope="col">phone number</th>
                    <th scope="col">email</th>
                    <th scope="col">owner_name</th>
                    </tr>
                    </thead>';
                    while($row=mysqli_fetch_assoc($result)){
                    echo '<tbody>
                     <tr>
                        <td>'.$row['id'].'</td> 
                        <td>'.$row['name'].'</td> 
                        <td>'.$row['location'].'</td> 
                        <td>'.$row['phone'].'</td> 
                        <td>'.$row['email'].'</td> 
                        <td>'.$row['owner_name'].'</td> 
                     </tr>
                    </tbody>';
                }
                }else{
                     echo '<h2 class="text-danger">Data not found</h2>';
                }
           }
       } ?> </table> </div> </div> </body></html>