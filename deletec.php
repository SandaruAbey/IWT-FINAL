<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete the client with the given ID from the database
    $query = "DELETE FROM `clientdetails` WHERE `id` = $id";
    mysqli_query($con, $query);
    
    // Redirect back to the original page after deleting
    header("Location: admindashbord2.php");
    exit();
}

?>