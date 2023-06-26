<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['user'])){
    header('location:green_life.php');
    exit;
}
$error="";

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'green_life');
$error="";
if(isset($_POST['pass']) && isset($_POST['pass2'])) {
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];
    $email=$_SESSION['user'];

        if ($_SESSION['pass']== $pass) {
            $qr = "UPDATE `sign_up` SET `password`='$pass2' WHERE email='$email'";
            mysqli_query($con, $qr);
            header('location:green_life.php');
        } else {
            $error = "Old password is incorrect";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My profile</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="MyStyle.css">
    <link rel="stylesheet" href="contactus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        <a href="contactus2.php">Menu</a>
        <a href="contactus2.php">Contact US</a>
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
            <h2>Change Password</h2>
            <form action="" method="post">
                <p style="font-size: 16px; font-family: 'Archivo Narrow', sans-serif; color: black">Welcome <?php echo $_SESSION['name'] ?></p>
                <p style="font-size: 16px; font-family: 'Archivo Narrow', sans-serif; color: #990000"> <?php echo $error ?></p>
                <input type="password"  required  class="field" name="pass" placeholder="Old Password"><i style="color: white" class="fas fa-eye"></i>
                <input type="password" id="d2" required class="field" name="pass2" placeholder="New Password"><i id="eye" aria-hidden="true" onclick="togglePa()" class="fas fa-eye"></i>
                <input type="submit" name="sub" class="btn" value="Update">


            </form>
        </div> </div> </div>
<script src="JS_file.js"></script>
<script>
    var state=false;
    function togglePa(){
        if(state){
            document.getElementById("d2").setAttribute("type","password");
            state=false;
        }
        else{
            document.getElementById("d2").setAttribute("type","text");
            state=true;
        } }
</script>
</body>
</html>

