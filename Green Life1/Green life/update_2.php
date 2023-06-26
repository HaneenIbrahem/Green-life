<?php
session_start();
if (!isset($_SESSION['user'])){
    header('location:sign_in.php');
    exit;
}
$error="";
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'green_life');
$error="";
$e=$_SESSION['user'];
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) ) {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];

    $sql = "SELECT * FROM sign_up WHERE email='$email'";
    $res = mysqli_query($con, $sql);
    if(mysqli_num_rows($res) > 0){


        $error = "Email already exist";

    }
    else {

            $qr = "UPDATE `sign_up` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email' WHERE email='$e'";
            mysqli_query($con, $qr);
            header('location:green_life.php');

} }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My profile</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="MyStyle.css">
    <link rel="stylesheet" href="contactus.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka+One&family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/wave.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <a href="green_life_HTML.html" ><img src="img/wave.png" width="100%" height="100px" alt="Logo"></a>
    <!-- href "#" will move the scroll position to the top -->
    <nav class="navbar">
        <a href="green_life.php" >Home</a>
        <a href="my_profile.php">Change Password</a>
        <a href="menu.html">Menu</a>
        <a href="contactus.html">Contact US</a>
        <a href="green_life_HTML.html">Log Out</a>
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
<div class="container">
    <div class="contact-box">
        <div class="right">
            <h2>Edit my profile</h2>
            <form action="" method="post">
                <p style="font-size: 16px; font-family: 'Archivo Narrow', sans-serif; color:black">Welcome <?php echo $_SESSION['name']?></p>
                <p style="font-size: 16px; font-family: 'Archivo Narrow', sans-serif; color: #990000"> <?php echo $error ?></p>
                <input type="text" required  class="field" name="first_name" autocomplete="off" placeholder="First Name"><i style="color: white" class="fas fa-eye"></i>

                <input type="text"  required class="field" name="last_name" autocomplete="off" placeholder="Last Name"><i style="color: white" class="fas fa-eye"></i>

                <input type="email"  required class="field" autocomplete="off" name="email" placeholder="Email"><i style="color: white" class="fas fa-eye"></i>

                <input type="submit" name="sub" class="btn" value="Update">


            </form>
        </div> </div> </div>
<script src="JS_file.js"></script>

</body>
</html>
