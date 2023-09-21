<?php
include 'connect_SK.php';
$success = "";
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pcode = $_POST["pcode"];
    $hno = $_POST["hno"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
        if($password == $confirmpassword){
            $query = "INSERT INTO `newsignin` (fname, lname, phone, email, pcode, hno, city, country, password) VALUES ('$fname', '$lname', '$phone', '$email', '$pcode', '$hno', '$city', '$country', '$password')";
           $result = mysqli_query($conn,$query);
           $success = "<script>alert('Registration Successful');</script>";
            // = "Registration Successful";
           header('Location: Login_SK.php');
        }
        else{
            $success = "Password Does Not Match";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "Sign In_SK.css">
    <link rel = "stylesheet" href = "homepage.css">
    <title>Bizen/Sign up</title>
</head>
<body >
    <header class = "header" >
        <a href = "homepage.php" class = "logo">
           <img src = "Untitled-1.png" class = "logoimg">
       </a>
           </header>

    <div class = "signbox">
    <p class = "success"> <?php echo $success ?></p>
    <center><h1 class = "SignIn">Sign In</h1></center> 

    <form class="signinbox" method="post" action="" autocomplete="off">
        <label>First Name</label><br>
        <input type ="text" placeholder="First Name" name="fname"><br><br>

        <label>Last Name</label><br>
        <input type ="text" placeholder="Last Name" name="lname"><br><br>

        <label>TP No</label><br>
        <input type ="text" placeholder="077-1234567" name="phone"><br><br>
        
        <label>Email</label><br>
        <input type ="email" placeholder="example@email.com" name="email"><br><br>

        <h3>Address</h3>
        <div class="addbox">
            <label>Postel Code</label><br>
            <input type ="text" placeholder="" name="pcode"><br><br>

            <label>Home No</label><br>
            <input type ="text" placeholder="" name="hno"><br><br>

            <label>City</label><br>
            <input type ="text" placeholder="" name="city"><br><br>

            <label>Country</label><br>
            <input type ="text" placeholder="" name="country"><br><br>

        </div>

        <label>Password</label><br>
        <input type ="password" placeholder="********" name="password"><br><br>

        <label>Confirm Password</label><br>
        <input type ="password" placeholder="********" name="confirmpassword"><br><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    </div> 


</body>

</html>