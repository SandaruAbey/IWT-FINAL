<?php
include 'connect_SK.php';
$success = "";
$user_id = $_GET['updateid'] ?? '';

if (isset($_POST["submit"])) {
    // Retrieve and sanitize form inputs
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pcode = mysqli_real_escape_string($conn, $_POST["pcode"]);
    $hno = mysqli_real_escape_string($conn, $_POST["hno"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);

    if ($password == $confirmpassword) {
        $query = "UPDATE `newsignin` SET fname = '$fname', lname ='$lname', phone = '$phone', email = '$email', pcode = '$pcode', hno = '$hno', city = '$city', country = '$country', password = '$password', confirmpassword = '$confirmpassword' WHERE user_id = $user_id";

        $result = mysqli_query($conn, $query);
        if ($result) {
            $success = "<script>alert('Update Successful');</script>";
            header('Location: Login_SK.php');
            exit;
        } else {
            $success = "Update Failed";
        }
    } else {
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
    <link rel="stylesheet" href="Sign In_SK.css">
    <link rel="stylesheet" href="homepag.css">
    <title>Bizen/Sign up</title>
</head>
<body>
    <header class="header">
        <a href="homepage.php" class="logo">
            <img src="Untitled-1.png" class="logoimg">
        </a>
    </header>

    <div class="signbox">
        <p class="success"><?php echo $success ?></p>
        <h1 class="SignIn">Sign In</h1>

        <form class="signinbox" method="post" action="" autocomplete="off">
            <label>First Name</label><br>
            <input type="text" placeholder="First Name" name="fname"><br><br>

            <label>Last Name</label><br>
            <input type="text" placeholder="Last Name" name="lname"><br><br>

            <label>TP No</label><br>
            <input type="text" placeholder="077-1234567" name="phone"><br><br>

            <label>Email</label><br>
            <input type="email" placeholder="example@email.com" name="email"><br><br>

            <h3>Address</h3>
            <div class="addbox">
                <label>Postal Code</label><br>
                <input type="text" placeholder="" name="pcode"><br><br>

                <label>Home No</label><br>
                <input type="text" placeholder="" name="hno"><br><br>

                <label>City</label><br>
                <input type="text" placeholder="" name="city"><br><br>

                <label>Country</label><br>
                <input type="text" placeholder="" name="country"><br><br>
            </div>

            <label>Password</label><br>
            <input type="password" placeholder="********" name="password"><br><br>

            <label>Confirm Password</label><br>
            <input type="password" placeholder="********" name="confirmpassword"><br><br>

            <button type="submit" name="submit">Update</button>
        </form>
    </div> 
</body>
</html>
