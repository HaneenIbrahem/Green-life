<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Green Life</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka+One&family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="chicken.css">
    <!-- Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body style="background-color: #eafaea">
<!--***********************************************************************-->
<header>
    <a href="#" ><img src="img/260231485_182966080712453_8150927369317930597_n.png" width="100%" height="100px" alt="Logo"></a>
    <!-- href "#" will move the scroll position to the top -->
    <nav class="navbar">
        <a href="#homePage" >Home</a>
        <a href="#dishes">Dishes</a>
        <a href="#about">About</a>
        <a href="menu.html">Menu</a>
        <a href="#review">Review</a>
        <a href="#order">Order</a>
    </nav>
    <!-- icons -->
    <div class="icons">
        <i class="fas fa-bars" id="bars"></i>
        <i class="fas fa-search" id="search"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="chart.php" class="fas fa-shopping-cart"></a>
    </div>
</header>
<br><br><br><br><br><br><br><br><br><br><br>
<h1 class="headd" style="text-align:  center">Juice</h1>
<!--<a href="cart.php"><img src="img/za.png" alt="" class="cart"></a>-->

<div class="col-md-12">
    <div class="row">



        <?php

        $dbHost     = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName     = "green_life";
        $flag=true;
        // Create database connection
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        $query = "SELECT * FROM `juice`";
        $result=$db->query($query);
        $count=1;
        while ($row=mysqli_fetch_array($result)){
            $z=$row['name'];
            $p=number_format($row['price'],2);
            $d=$row['description'];
            $html='  <div class="col-md-4">
            <form method="post" action="juice.php?action=add&id= '.$row["id"].'">
                <div class="container">
                    <img src="img/'.$row['image'].'" alt="Avatar" class="image">
                    <div class="middle">
                        <div class="nameofmeal"id="n'.$count.'"><b >'.$z.'</b></div> 
                        <div class="aa"id="n'.$count.'"><b >'.$d.'</b><br></div>
                        <div class="aa" id="z'.$count.'"><b>'.$p.'$</b></div> <!--السعر-->
                        
                        <div class="aa">How much do you want from this?</div>
                        <br>
                        <input name="ff'.$count.'" type="text" class="field">
                        
                        <input name="add_to_cart'.$count.'" type="submit" value="Order Now" class="btn" ;
    border-color: #27ae60;">
                    </div>
                    <br><br>
                </div>
            </form>
        </div>';

            $count++;
            echo $html;

        }

        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        $query = "SELECT * FROM `juice`";
        $result=$db->query($query);

        for($x=1;$x<=15;$x++)
            if (isset($_POST['add_to_cart' . $x])) {
                $empty=$_POST['ff'.$x];
                if($empty==''){
                    ?>
                    <script>alert(" Please Enter The Number ")</script>
                <?php
                }
                else{
                $flag=true;
                if (isset($_POST['add_to_cart'.$x])) {

                $d =" SELECT `id`, `name`, `description`,`price`, `image` FROM `juice` WHERE `id`=".$x;
                $result=$db->query($d);
                $followingdata = $result->fetch_assoc();
                $pname="'". $followingdata['image']."'";
                $f_price= $followingdata['price'];
                $nn= "'".$followingdata['name']."'";
                $quan= $_POST['ff'.$x];



                $search=$db->query("SELECT * FROM `chart` WHERE `p_name`=".$nn);


                while($row = mysqli_fetch_array($search)){

                    $db->query("UPDATE `chart` SET `quantity`=".$quan." WHERE `p_name`=$nn");
                    $flag = false;
                }
                if($flag){

                    $insert=  $db->query("INSERT INTO `chart`(`name`, `price`, `quantity`, `p_name`,  `id`) VALUES ($pname,$f_price,$quan,$nn,$x)");

                }
                ?>
                    <script>alert('Your request has been added successfully')</script>
                    <?php

                }
                }


            }
        ?>


</body>
</html>
