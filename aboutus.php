<!-- source=https://fontawesome.com/search?m=free&o=r
source=Google fonts -->
<?php
include 'connectcon.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $inquery = $_POST['inquery'];
     

    $sql = "INSERT INTO contact (name,mail,inquery)
            VALUES ('$name', '$mail', ' $inquery')";
            
    if (mysqli_query($con, $sql)) {
        echo "Payment details inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "servicepa.css">
    <script src="https://kit.fontawesome.com/b3ca95fff7.js" crossorigin="anonymous"></script>
    <title>Bizen.com/Home</title>
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
    <img src = "aboutus.jpg" class =  "imglap">
    <p class="theam"><span class="highlight1">AGENCY OF</span><br>TALENTED   <br>DEVELOPERS &<br>DESIGNERS</p><br>

    <p class="theam5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Team</p><br>
 <img class="des" src="designer.jpg" ><span class="highlight1"><p class="theam4">DESIGNER<br></p></span><p class="desi">Dan is a skilled and innovative creative designer on our team. With expertise in design principles and a keen eye for aesthetics, they create visually captivating designs that leave a lasting impact. Their talent and dedication make them an invaluable asset to our team.</p><br>
 <br><img class="dev" src="developer.jpg" >
<br><br><span class="highlight1"><p class="theam3">DEVELOPER<br></p></span><br>
<p class="theam2">Our talented developer, brayan is a skilled professional with a passion for coding and problem-solving. With expertise in various programming languages and frameworks, they bring innovative solutions to our projects.Brayan is dedicated to creating robust and efficient code that powers our website and ensures a seamless user experience.</p><br><br><br><br> <br><br><br><br>
<center><table border="0" class="table">
     <th class="th4"> 
     
    <form method="post">
        <label for="name" class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Your Name"class="box"><br><br>
        <label for="mail"class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your G-Mail</label><br>
        <input type="text" name="mail" id="mail" placeholder="Enter Your G-mail" class="box"><br><br>
        <label for="inquery"class="form">Inquery</label><br>
        <input type="text" name="inquery" id="inquery" placeholder="Enter Your Inquery"class="box"><br><br>
         <br><br>
        <center> <button type="submit" name="submit" class="button">SUBMIT</button></center><br>
       </form>
</th> 
</table>  </center>
  

  




    


</body>
</html>