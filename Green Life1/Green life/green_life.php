<?php
error_reporting(0);
session_start();
if (!$_SESSION['user']){
    header('location:sign_in.php');
    exit;
}
$email=$_SESSION['user'];
$name=$_SESSION['name'];
$con = mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'green_life');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Green Life</title>
    <link rel="stylesheet" href="MyStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka+One&family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .wraper{
            width: 800px;
            margin: 0 auto;
            background-color: #d6f5d6;
            color: #27ae60;
        }
        .wraper:after{/* الخلفية الكاملة تحت */
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: url("img/download.jpg") no-repeat center;
            background-size: cover;
            filter: blur(50px);
            z-index: -1; /*الصورة مغبشة*/
        }
        .table2{
            border-collapse: collapse;
            width: 100%;
            font-size:24px;
        }

        .table2 tr td{
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #663300;
        }
        tr:hover{
            background-color: #c1f0c1;
        }
    </style>
    <link rel="shortcut icon" type="image/png" href="img/wave.png">

</head>
<body>

<!-- Header Section -->
<header>
    <a href="#" ><img src="img/wave.png" width="100%" height="100px" alt="Logo"></a>
    <!-- href "#" will move the scroll position to the top -->
    <nav class="navbar">
        <a href="offer.php">Menu</a>
        <a href="my_profile.php">Change Password</a>
        <a href="green_life.php">My information</a>
        <a href="contactus2.php">Contact US</a>
        <a href="green_life_HTML.html">Log Out</a>
    </nav>
    <!-- icons -->
    <div class="icons">

        <i class="fas fa-bars" id="bars"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
</header>
<section></section>
<section>
<div class="container_pro">

    <div class="wraper">
        <?php
        $q=mysqli_query($con,"SELECT `first_name`, `last_name`, `email`, `date` FROM `sign_up` WHERE email='$email'")
        ?>
        <br>
        <h2 style="text-align: center;font-size: 30px">My Information</h2><br>
        <div><h3 style="font-size: 24px; text-align: center;color: #663300"> Welcome ,<?php

                echo "$name";
                ?> </h3>
        <img style="display: block;
  margin-left: auto;
  margin-right: auto;
 width: 25%; height: 25%"  src="img/15723121321578463664-512.png">
        <?php
        $row=mysqli_fetch_assoc($q);
        $name=$row['first_name'];
        $_SESSION['name']=$name;
        ?>

            <?php
            echo"<b>";
            echo "<table class='table2'> ";
            echo"<tr>";

            echo"<td>";
            echo"<b>First Name :</b>";
            echo"</td>";

            echo"<td>";
            echo $row['first_name'];
            echo"</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td>";
            echo"<b>Last Name :</b>";
            echo"</td>";

            echo"<td>";
            echo $row['last_name'];
            echo"</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td>";
            echo"<b>Email :</b>";
            echo"</td>";

            echo"<td>";
            echo $row['email'];
            echo"</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td>";
            echo"<b>Date Of Birth :</b>";
            echo"</td>";

            echo"<td>";
            echo $row['date'];
            echo"</td>";
            echo"</tr>";




            echo"<tr>";


            echo"<td colspan='2'>";
         ?>
       <a href="update_2.php" class="button" style="position: relative; " >Edit</a>
    <?php
            echo"</td>";
            echo"</tr>";
            echo" </table>";
            echo"</b>";
            ?>

        </div>

    </div>
</div>

</section>
<script src="JS_file.js"></script>
</body>
</html>