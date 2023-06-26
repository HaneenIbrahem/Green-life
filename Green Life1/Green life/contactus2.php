<!DOCTYPE html>
<html>
<head>
    <title>Green Life</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka+One&family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="contactus2.css">
</head>
<body>
<header>
    <a href="#" ><img src="img/260231485_182966080712453_8150927369317930597_n.png" width="100%" height="100px" alt="Logo"></a>
    <!-- href "#" will move the scroll position to the top -->
    <nav class="navbar">
        <a href="my_profile.php">Change Password</a>
        <a href="green_life.php">My information</a>
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
<div class="empty"></div>
<!--contact start-->
<form action="" method="post">
    <div class="container">
        <div class="contact-box">
            <div class="right">
                <h2>Contact Us</h2>
                <input type="text" class="field" placeholder="NAME" name="fname" required>
                <input type="text" class="field" placeholder="EMAIL" name="email" required>
                <textarea placeholder="MESSAGE" class="field" name="message" required></textarea>
                <button class="btn">Send</button>
            </div>
        </div>
    </div>
</form>
<?php
//try {
    $db =new mysqli("localhost","root","","green_life");

//}catch (Exception $e){
//    echo $e->getTraceAsString();
//}

if(isset($_POST['fname']) && isset($_POST['email'])  && isset($_POST['message'])) {
    $name = $_POST['fname'];
    $email = $_POST['email'];
//    $phone = $_POST['cont'];
    $message = $_POST['message'];
    $is_insert = $db->query("INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
    $f=$_POST['email'];
    $msg=nl2br($name.' sent you a message , Message: '.$message.'. Reply to '.$name.' and tell him you got his message. '.$name."'s email : ".$email);
    mail('haneenibra2000@gmail.com','Green Life',$msg);
    echo 'Mail Sent Successfully, Thank You';

}
?>
</body>
</html>
