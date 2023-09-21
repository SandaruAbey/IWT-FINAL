<!-- source=https://fontawesome.com/search?m=free&o=r, 
source=Google fonts -->
<?php
include 'connectcon.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "contact.css">
    <script src="https://kit.fontawesome.com/b3ca95fff7.js" crossorigin="anonymous"></script>
    <title>Bizen.com/contact</title>
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
    
     <img src = "admin.jpg" class ="imglap1"> 
     </div>
<br><br><br>
 
<table border="1" class="table">
        <thead>
            <tr>
                <th scope="col" class="th1">Index</th>
                <th scope="col" class="th1">Name</th>
                <th scope="col" class="th1">G-mail</th>
                <th scope="col" class="th1">INQUERY</th>
                <th scope="col" class="th1">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM contact";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $mail = $row['mail'];
                    $inquery = $row['inquery'];
                    
                    
                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $mail . '</td>
                    <td>' . $inquery . '</td>
                    <td>
<center> 
                   

                <a href="updatecon.php?updatename='.$id.'"><button class="up">Update</button></a>

                <a href="deletecon.php?deletename='.$id.'"><button class="del"><p  class="delp">Delete</p></button></a>
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