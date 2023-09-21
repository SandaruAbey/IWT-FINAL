<?php
include 'connect_SK.php';

$fetch ="";

if(isset($_GET['delete'])){
    unset($User_id);
    session_destroy();
    header('location: Login_SK.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="user_interfac.css">
    <title>User Dashbord</title>
</head>
<body>
<header class = "header" >
    
    <a href = "homepage.php" class = "logo">
        <p class = "dashbord">DASHBORD</p>
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

<div class="wellcome">
    <h1>WELLCOME BIZEN</h1>
</div>
<br>
<div class="contaienr">
<div class="profile">
<img src = "mother.png" class = "profileimg"><br><br>
    <center><h1 class="h1name">Hi</h1></center>
        <?php
         
         $select = mysqli_query($conn, "SELECT * FROM `newsignin`");
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
      ?>     
      <h3 class="h1name"><?php echo $fetch['fname']; ?></h3>

      <center><button class="btnupdate"><a href="update_SK.php?updateid = '.$User_id.'">Update</a></button></center>
    <!--<button class="btndelete"><a href="delete_SK.php?deleteid='.$id.'" class="">Delete</a></button>-->
    <center><button class="btndelete"><a href="Login_SK.php" class="delete-btn">Log Out</a></button></center> 
 </div>
</div><br><br><br>

<center><img src="ANA.png" class="ana"></center><br><br>
<center> <button class="x"><a href="feedback.php">SEND FEEDBACK</a></button></a></center>



</body>
</html>