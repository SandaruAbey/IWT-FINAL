<?php
include 'connect_SK.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `newsignin` WHERE User_id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
       echo "Delete Successful";
       exit();
    }
}
?>
