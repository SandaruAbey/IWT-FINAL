<!-- source=https://fontawesome.com/search?m=free&o=r,https://media.istockphoto.com
source=Google fonts -->
<?php
include 'connect.php';

session_start();
$error = "";
if (isset($_POST['btnsignup'])) {
    if (isset($_POST['btnsignup'])){

        $email = mysqli_real_escape_string($con,$_POST['email']);
        $pass = mysqli_real_escape_string($con,$_POST['password']);

        $select = mysqli_query($con,"SELECT *from `admindetails` WHERE email = '$email'
        AND password = '$pass'") or die ('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('Location: admindashbord2.php');
        exit;
    } else {
        $error = "Invalid Email or Password!";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "adminlogg.css">
    <link rel = "stylesheet" href = "homepag.css">
    <script src="https://kit.fontawesome.com/b3ca95fff7.js" crossorigin="anonymous"></script>
    <title>Bizen/Get in touch</title>
</head>
<body>
<header class = "header" >
 <a href = "homepage.php" class = "logo">
    <img src = "Untitled-1.png" class = "logoimg">
</a>
    <nav>
    <ul class = "navi">
        <li><a href = "homepage.php" >HOME</a></li>
        <li><a href = "service.php" >SERVICE</a></li>
        <li><a href = "package.php" >PACKAGE</a></li>
        <li><a href = "aboutus.php" >ABOUT US</a></li>
        <li><a href = "Login_SK.php" class = "contact">LOG IN</a></li>

    </ul>

</nav>
    </header>
    <div class = "whitebox">
    <p class = "error"> <?php echo $error?></p>
    <h1 class = "login">Admin Sign Up</h1>

    <form class = "form1" method = "post" action = "adminlogg.php">
        <div class = "inputg">
            <div class = "input">
                <i class="fa-solid fa-user"></i>
                <input type = "text" placeholder  = "Enter your username" name = "username">
            </div>

            
            <div class = "input">
            <i class="fa-solid fa-envelope"></i>
                <input type = "email" placeholder  = "Enter your E-mail" name = "email">
            </div>

            
            <div class = "input">
            <i class="fa-solid fa-lock"></i>
                <input type = "password" placeholder  = "Enter your password" id = "firstpas" name = "password">
            </div>

           

            <p class = "p1">Lost password <a class = "click" href = "#">click here</a></P>
            <div class = "btn">
            <button class = "signIn" onclick = "btnclick ()" name = "btnsignup">Log In </button>
            
</btn>
        </div>


    </div>


</body>
<script src = "loging.js"></script>
</html>