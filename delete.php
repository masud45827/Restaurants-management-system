<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from resturent_tb where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
         //echo "delete successfull";
         header('Location:display.php');
    }else{
        die(mysqli_error($con));   
    }
}
?>