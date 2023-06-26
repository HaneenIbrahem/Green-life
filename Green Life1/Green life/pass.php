<?php
$errors=array();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'green_life');
if (isset($_POST['forget_but'])){
    $email=$_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']="Email Address is invalid";
    }
    if(empty($email)){
        $errors['email']="Email Required";
    }
    if(count($errors)==0){
        $sql="SELECT * FROM sign_up WHERE email='$email'LIMIT 1";
        $res = mysqli_query($con, $sql);
        $user=mysqli_fetch_assoc(res);
        $token=$user['token'];
        sendPassword($email,$token);
        header('location:pass.php');
        exit(0);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forget password</title>
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
        <a href="sign_in.html">Sign In</a>
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

<div class="container">
    <div class="contact-box">
        <div class="right">
            <h2>Password change</h2>
            <h4 style=" font-family:'Archivo Narrow', sans-serif; font-size: 18px" >Enter your email to send you a code</h4>

            <form method="post" action="">

                <input type="email"  required class="field" autocomplete="off" name="email" placeholder="Enter Your Email">
                <button name="forget_but" class="btn">Send</button>

            </form>
        </div> </div> </div>
<script src="JS_file.js"></script>
</body>
</html>

