<!-- source=https://fontawesome.com/search?m=free&o=r
source=Google fonts -->
<?php
include 'connectfeedback.php';

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $feedback = $_POST['feedback'];
    
     

    $sql = "INSERT INTO feedback (mail,feedback)
            VALUES ( '$mail', ' $feedback')";
            
    if (mysqli_query($con, $sql)) {
        echo "Payment details inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>









<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "contact.css">
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
    <br><br>
    <article class = "art1">
    <div class = "divtheam">
    <p class="theam2"> <span class="highlight1">&nbsp;&nbsp;&nbsp;&nbsp;FEEDBACK</span></p>
    
    <img src = "contacts.jpg" class ="imglap1"> 
     </div>
<br><br>
<table border="0" class="table">
     
    <th class="th4"> 
     
    <form method="post">
        <label for="mail" class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your G-Mail</label><br>
        <input type="text" name="mail" id="mail" placeholder="Enter Your mail"class="box"><br><br>
        <label for="feedback"class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your Feedback</label><br>
        <input type="text" name="feedback" id="feedback" placeholder="Enter Your Feedback" class="box"><br><br>
         
         <br><br>
        <center> <button type="submit" name="submit" class="button">SUBMIT</button></center><br>
       </form>
</th> 
</table>
<br><br>
 

 


 


</body>
</html>