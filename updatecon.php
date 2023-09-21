<!-- source=https://fontawesome.com/search?m=free&o=r
source=Google fonts -->
<?php
include 'connectcon.php';

$id=$_GET['updatename'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $inquery = $_POST['inquery'];
    

    $sql = "UPDATE contact SET name='$name', mail='$mail', inquery='$inquery' WHERE id='$id'";

    
    if (mysqli_query($con, $sql)) {
        echo "Payment details updated successfully.";
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
    <title>Bizen.com/update</title>
</head>
<body>
    <header class = "header" >
 <a href = "homepage.php" class = "logo">
    <img src = "Untitled-1.png" class = "logoimg">
</a>
    <nav>
    <ul class = "navi">
        <li><a href = "homepage.html" >HOME</a></li>
        <li><a href = "servicepage.php" >SERVICE</a></li>
        <li><a href = "package.php" >PROJECT</a></li>
        <li><a href = "#" >ABOUT US</a></li>
        <li><a href = "#" >BLOG</a></li>
        <li><a href = "clientproposal.php" class = "contact">GET IN TOUCH</a></li>

    </ul>

</nav>
    </header>
    <br><br>
    <article class = "art1">
    <div class = "divtheam">
    <p class="theam2"> <span class="highlight1">Update</span>Inquery</p>
    
     <img src = "contactupdate.jpg" class =  "imglap"> 
     </div>
<br><br>
<table border="0" class="table">
     
    <th class="th4"> 
    <p class="theam1">Update &nbsp;&nbsp;<span class="highlight1">Details</span></p> <br>
    
        <form method="post">
        <label for="name" class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Your Name"class="box"><br><br>
        <label for="mail"class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your G-Mail</label><br>
        <input type="text" name="mail" id="mail" placeholder="Enter Your G-mail" class="box"><br><br>
        <label for="inquery"class="form">Inquery</label><br>
        <input type="text" name="inquery" id="inquery" placeholder="Enter Your Inquery"class="box"><br><br>
         <br><br>
         <a href="displaycon.php"><button type="submit" name="submit" class="button">Update</button></a></center><br>
       </form>




       </form>
</th> 
</table>
<br><br>
</body>
</html>