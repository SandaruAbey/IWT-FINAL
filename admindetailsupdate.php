<!-- source=https://fontawesome.com/search?m=free&o=r,https://media.istockphoto.com
source=Google fonts -->
<?php 
include 'connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `admindetails` WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$name = $row['Name'];
$email = $row['email'];
$mobile = $row['mobile'];
        

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];

    $sql = "UPDATE `admindetails` SET name = '$name', email = '$email', 
    mobile = '$mobile', address = '$address', password = '$password' 
    WHERE id = $id";
    
     $result = mysqli_query($con, $sql);
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel = "stylesheet" href = "client.css">
    <link rel = "stylesheet" href = "homepag.css">
    <script src="https://kit.fontawesome.com/b3ca95fff7.js" crossorigin="anonymous"></script>
</head>
<body backgroun= "https://media.istockphoto.com/id/669887350/photo/business-people-working-at-desk-by-windows.jpg?s=612x612&w=0&k=20&c=VRR-Yn8559uqqFwqsLdqkXoytVfYuDzp93TF2cUzswQ=">
<header class = "header" >
 <a href = "homepage.php" class = "logo">
    <img src = "Untitled-1.png" class = "logoimg">
</a>
    <nav>
    <ul class = "navi">
        <li><a href = "admindashbord2.php" class = "contact">DASHBORD</a></li>

    </ul>

</nav>
    </header>
<div class = "container">
    <div class = "content">
        <h1> Add Admin </h1>
        <form class = "form" action = "addnewadmin.php" method = "POST">
            <div class = "input">
            <input type = "text" class = "lable1" placeholder = "Enter name" name = "name">
</div>

<div clas = "input">
            <input type = "email" class = "lable1" placeholder = "Enter E-mail" name = "email">
</div>
            <div class = "input">
            <input type = "text" class = "lable1" placeholder = "Enter Mobile number" name = "mobile">
            </div>   
            <div class = "input">
          
            <input type = "text" class = "lable1" placeholder = "Enter Address" name = "address">
</div>
            <div class = "input">
            <input type = "date" class = "lable1" placeholder = "Enter Birthday" name = "birthday">
</div>

<div class = "input">
            <input type = "password" class = "lable1" placeholder = "Enter Password" name = "password">
</div>

    <div button = "btnsubmit">
        <button class  = "submit" name = "submit" >Update</button>


</div>
        </form>





</body>
</html>