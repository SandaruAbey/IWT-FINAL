<!-- source=https://fontawesome.com/search?m=free&o=r
source=Google fonts -->
<?php
include 'conneectpay.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "payments.css">
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
    <p class="theam2"> <span class="highlight1">Admin</span>page</p>
    
     <img src = "payment.jpg" class =  "imglap"> 
     </div>
<br><br><br>
 
<table border="1" class="custom-table">
        <thead>
            <tr>
                <th scope="col" class="thc">Index</th>
                <th scope="col" class="thc">Name</th>
                <th scope="col" class="thc">Card Number</th>
                <th scope="col" class="thc">CVV</th>
                <th scope="col" class="thc">Expire Date</th>
                <th scope="col" class="thc">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM payment";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $holder = $row['name'];
                    $card = $row['card'];
                    $CVV = $row['cvv'];
                    $date = $row['date'];
                    
                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $holder . '</td>
                    <td>' . $card . '</td>
                    <td>' . $CVV . '</td>
                    <td>' . $date . '</td>
                    <td>
<center> 
                   

                <a href="update.php?updatename='.$id.'"><button class="up">Update</button></a>

                <a href="delete.php?deletename='.$id.'"><button class="de">Delete</button></a>
</center>
                    </tr>';
                }
            }
            ?>
        </tbody>
    </table>
<br><br>
</body>
</html>