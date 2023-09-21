<?php
include 'conneectpay.php';
if(isset($_GET['deletename'])){
    $id=$_GET['deletename'];

    $sql = "DELETE FROM payment WHERE id = '$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }

    else{
        die(mysqli_error($con));
    }
}

?>
 