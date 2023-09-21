<!-- source=https://fontawesome.com/search?m=free&o=r
source=Google fonts -->
<?php
include 'conneectpay.php';

$id=$_GET['updatename'];

if (isset($_POST['submit'])) {
    $holder = $_POST['holder'];
    $card = $_POST['card'];
    $CVV = $_POST['CVV'];
    $date = $_POST['date'];

    $sql = "UPDATE payment SET name='$holder', card='$card', cvv='$CVV', date='$date' WHERE id='$id'";

    
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
    <link rel = "stylesheet" href = "payments.css">
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
    <p class="theam2"> <span class="highlight1">Update</span>Galaxy</p>
    
     <img src = "payment.jpg" class =  "imglap"> 
     </div>
<br><br>
<table border="0" class="custom-table">
    <th class="th2"></th><th class="th3"></th>
    <th class="th1"> 
    <p class="theam1">Update &nbsp;&nbsp;<span class="highlight1">Details</span></p> <br>
    <form method="post">
        <label for="holder" class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Card Holder</label><br>
        <input type="text" name="holder" id="holder" placeholder="Enter Your Name" class="box"><br><br>
        <label for="card"class="form">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Card Number</label><br>
        <input type="text" name="card" id="card" placeholder="Enter Your Card " class="box"><br><br>
        <label for="CVV"class="form">CVV</label><br>
        <input type="text" name="CVV" id="CVV" placeholder="CVV"class="box"><br><br>
        <label for="date"class="form">Exp Date</label><br>
        <input type="text" name="date" id="date" placeholder="Date"class="box"><br><br>
        <center> 
<a href="display.php"><button type="submit" name="submit" class="button">Update</button></a></center><br>
       </form>
</th> 
</table>
<br><br>
</body>
</html>