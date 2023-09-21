<?php
include 'connectcon.php';
if(isset($_GET['deletename'])){
    $id=$_GET['deletename'];

    $sql = "DELETE FROM contact WHERE id = '$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:displaycon.php');
    }

    else{
        die(mysqli_error($con));
    }
}

?>
 