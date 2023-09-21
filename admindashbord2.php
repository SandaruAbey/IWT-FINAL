<!-- source=https://fontawesome.com/search?m=free&o=r
source=Google fonts -->
<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Stylesheet" href = "admindash2.css">
    <link rel = "stylesheet" href = "home.css">
    <script src="https://kit.fontawesome.com/b3ca95fff7.js" crossorigin="anonymous"></script>
    <title>Admin Dashbord</title>
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
        <li><a href = "#" class = "profile"><i class="fa-solid fa-user"></i></a></li>

    </ul>

</nav>
    </header>
<main>
 <div class  = "card">
        <div class = "card-single">
            <div>
                <h1>54</h1>
            <span>Customer</span>
            </div>

            <div>
            <i class="fa-solid fa-user-group"></i>
            </div>

        </div>

        <div class = "card-single">
            <div>
                <h1>60</h1>
            <span>Projects</span>
            </div>

            <div>
            <i class="fa-solid fa-list-check"></i>
            </div>

        </div>

        <div class = "card-single">
            <div>
                <h1>254</h1>
            <span>Orders</span>
            </div>

            <div>
            <i class="fa-solid fa-bag-shopping"></i>
            </div>

        </div>

        <div class = "card-single">
            <div>
                <h1>$67K</h1>
            <span>Cost</span>
            </div>

            <div>
            <i class="fa-regular fa-credit-card"></i>
            </div>

        </div>
 </div>

 <div class="customerdiv">
    <h1 class = "Customerh1"> Customers</h1>
    <button class = "Addnewclientbtn"><a href = "addnewclient.php" class = "ClientProposal">Add new Client </a></button>

    <div class= "tablescroll"  style="max-height: 400px; overflow-y: auto;">
    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contacts</th>
    </tr>
  </thead>
  <tbody>
<?php
$getdata = "Select * from `clientdetails`";
$result = mysqli_query($con, $getdata);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $contact = $row['mobile'];

        echo ' <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$contact.'</td>
        <td><a href="clientdetailsupdate.php?id=' . $id . '" class = "clientdetailsupdatebtn">Update</a></td>
        <td><a href="deletec.php?id=' . $id . '" class = "clientdetailsdeletebtn">Delete</a></td>
      </tr>';
    }
}

?>

  </tbody>
</table>
</div>

</div>

<!-- Admin pannel !-->

<div class="admindiv">
    <h1 class = "Customerh1"> Admin pannel</h1>
    <button class = "Addnewclientbtn"><a href = "addnewadmin.php" class = "ClientProposal">Add new admin </a></button>

    <div class= "tablescroll"  style="max-height: 400px; overflow-y: auto;">
    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contacts</th>
    </tr>
  </thead>
  <tbody>
<?php
$getdata = "Select * from `admindetails`";
$result = mysqli_query($con, $getdata);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];

        echo ' <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td><a href="admindetailsupdate.php?id=' . $id . '" class = "clientdetailsupdatebtn">Update</a></td>
        <td><a href="admindelete.php?id=' . $id . '" class = "clientdetailsdeletebtn">Delete</a></td>
      </tr>';
    }
}

?>

  </tbody>
</table>
</div><br><br><br><br>
<button class = "Addnewclientbtn"><a href = "displayfeedback.php" class = "ClientProposal">FEEDBACK PAGE </a></button><br><br><br><br>
<button class = "Addnewclientbtn"><a href = "displaycon.php" class = "ClientProposal">INQUERY PAGE </a></button><br><br><br><br>
<button class = "Addnewclientbtn"><a href = "display.php" class = "ClientProposal">PAYMENT PAGE </a></button>
</div>
 
            <?php
            $getdata = "SELECT * FROM `clientdetails`";
            $result = mysqli_query($con, $getdata);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $contact = $row['mobile'];

                    echo ' <tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $contact . '</td>
                          </tr>';
                }
            }
            ?>

         

</main>



</body>
</html>