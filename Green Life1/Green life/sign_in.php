<?php
error_reporting(0);
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'green_life');
$error="";

if(isset($_POST['email1']) && isset($_POST['pass1'])) {
    $email1=$_POST['email1'];
    $pass1=$_POST['pass1'];
    $admin='greenlife2482000@gmail.com';

    if($email1==$admin){
        header('location:adminpage.php');
    }
    else {
    $sql = "SELECT * FROM sign_up WHERE email='$email1' && password='$pass1'";
    $res = mysqli_query($con, $sql);

    if(mysqli_num_rows($res) == 1){
        if(isset($_POST['Rem'])){
        setcookie('email',$email1,time()+30);
        setcookie('pass',$pass1,time()+30);
        }
        else{
            setcookie('email',$email1,30);
            setcookie('pass',$pass1,30);
        }

        $_SESSION['user']=$email1;
        $_SESSION['pass']=$pass1;

        header('location:offer.php');
    }
    else {
        $error = "Email or/and password incorrect";
    }
}
$emailCo='';
$passCo='';
$setRem="";
if(isset($_COOKIE['email']) && isset($_COOKIE['pass']) ){
    $emailCo=$_COOKIE['email'];
    $passCo=$_COOKIE['pass'];
    $setRem="checked='checked'";
} }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
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
        <a href="green_life_HTML.html" >Home</a>
        <a href="green_life_HTML.html#dishes">Dishes</a>
        <a href="green_life_HTML.html#about">About</a>
        <a href="menu.html">Menu</a>
        <a href="contactus.html">Contact US</a>
        <a href="#">Sign In</a>
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
            <h2>Sign In</h2>

            <form action="" method="post">
                <p style="font-size: 16px; font-family: 'Archivo Narrow', sans-serif; color: #990000"><?php echo $error ?></p>
                <input type="email" required name="email1" class="field" autocomplete="off" placeholder="Enter Your Email"
                value="<?php echo $emailCo?>"> <i style="color: white" class="fas fa-eye"></i>

                <input type="password" id="passx" required name="pass1" class="field" placeholder="Enter Your Password"
                       value="<?php echo $passCo?>"><i id="eye" aria-hidden="true" onclick="togglePa()" class="fas fa-eye"></i>

                <div class="rem" style="color: #27ae60;font-size: 18px;">
                <input type="checkbox" <?php echo $setRem ?> id="c_box" name="Rem"><label for="c_box" >Remember me</label>
                </div>
                    <br>
                <input type="submit" class="btn" value="Sign In">
            </form>

            <p style=" font-family: 'Archivo Narrow', sans-serif; font-size: 18px"> Don't have an account? <a href="registration.php" style="text-decoration: none
 ;color: #27ae60">Sign Up here</a></p>

            <p style="font-family: 'Archivo Narrow', sans-serif; font-size: 14px"><a href="forgetPass.php" style="text-decoration: none
 ;color: #27ae60">Forget Password ? </a></p>
        </div> </div> </div>
<script src="JS_file.js"></script>
<script>
    var state=false;
    function togglePa(){
        if(state){
            document.getElementById("passx").setAttribute("type","password");
            state=false;
        }
    else{
        document.getElementById("passx").setAttribute("type","text");
        state=true;
    } }
</script>
</body>
</html>