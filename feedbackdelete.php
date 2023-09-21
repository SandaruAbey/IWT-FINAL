<?php
include 'connectfeedback.php';
if(isset($_GET['deletename'])){
    $id=$_GET['deletename'];

    $sql = "DELETE FROM feedback WHERE id = '$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:displayfeedback.php');
    }

    else{
        die(mysqli_error($con));
    }
}

?>
 