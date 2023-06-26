<?php

error_reporting(0);
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'green_life');
$error="";
$success="";
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass2'])) {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $date=$_POST['date'];

$sql = "SELECT * FROM sign_up WHERE email='$email'";

$res = mysqli_query($con, $sql);

if(mysqli_num_rows($res) > 0){


            $error = "Email already exist";

        }
        else {
    if ($pass == $pass2) {
        $qr = "INSERT INTO `sign_up`(`first_name`, `last_name`, `email`, `password`,`date`) VALUES ('$first_name','$last_name','$email','$pass','$date')";
        mysqli_query($con, $qr);
        header('location:sign_in.php');
    } else {
        $error = "not matched password";
    } }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="MyStyle.css">
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka+One&family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/wave.png">
</head>
<body>
<header>
    <a href="green_life_HTML.html" ><img src="img/wave.png" width="100%" height="100px" alt="Logo"></a>
    <!-- href "#" will move the scroll position to the top -->
    <nav class="navbar">
        <a href="green_life_HTML.html" >Home</a>
        <a href="green_life_HTML.html#dishes">Dishes</a>
        <a href="green_life_HTML.html#about">About</a>
        <a href="menu.html">Menu</a>
        <a href="contactus.html">Contact US</a>
        <a href="sign_in.php">Sign In</a>
    </nav>
    <!-- icons -->
    <div class="icons">
        <i class="fas fa-bars" id="bars"></i>
        <i class="fas fa-search" id="search"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
</header>
<form action="" id="search_form">
    <input type="search" name="" placeholder="Search ... " id="search_box">
    <label for="search_box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>

</form>
<div class="empty"></div>
<div class="empty"></div>
<div class="container">
    <div class="contact-box">
        <div class="right">
            <h2>Sign Up</h2>
            <h4 style=" font-family:'Archivo Narrow', sans-serif; font-size: 18px" >Create Your Account</h4>

            <form action="" method="post">
                <p style="font-size: 16px; font-family: 'Archivo Narrow', sans-serif; color: #990000"><?php echo $error ?></p>
                <input type="text" required  class="field" name="first_name" autocomplete="off" placeholder="Enter Your First Name"><i style="color: white" class="fas fa-eye"></i>

                <input type="text"  required class="field" name="last_name" autocomplete="off" placeholder="Enter Your Last Name"><i style="color: white" class="fas fa-eye"></i>

                <input type="email"  required class="field" autocomplete="off" name="email" placeholder="Enter Your Email"><i style="color: white" class="fas fa-eye"></i>

                <input type="date" style="color: #666666" required class="field" autocomplete="off" name="date" ><i style="color: white" class="fas fa-eye"></i>

                <input type="password" id="dd" required  class="field" name="pass" placeholder="Enter Your Password"><i style="color: black" id="eye" aria-hidden="true" onclick="togglePa()" class="fas fa-eye"></i>

                <input type="password" required class="field" name="pass2" placeholder="Confirm Password"><i style="color: white" class="fas fa-eye"></i>
                <input type="submit" name="sub" class="btn" value="Sign Up">

                <p style=" font-family: 'Archivo Narrow', sans-serif; font-size: 18px"> By clicking the signup button you agree to our<br> <a
                        style="text-decoration: none;  color: #27ae60" target="_blank" href="https://www.termsfeed.com/live/1f58f914-292d-4d2f-be3e-0bfe3795e569" >Policy Privacy </a>
                </p>
                <p style=" font-family: 'Archivo Narrow', sans-serif; font-size: 18px"> Already have an account? <a href="sign_in.php" style="text-decoration: none
 ;color: #27ae60">Sign in here</a></p>
            </form>
        </div> </div> </div>
<script src="JS_file.js"></script>
<script>
    var state=false;
    function togglePa(){
        if(state){
            document.getElementById("dd").setAttribute("type","password");
            state=false;
        }
        else{
            document.getElementById("dd").setAttribute("type","text");
            state=true;
        } }
</script>
</body>
</html>
