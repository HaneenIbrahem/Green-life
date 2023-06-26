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
    <link rel="stylesheet" href="offer.css">
    <!-- Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="shortcut icon" type="image/png" href="img/wave.png">
</head>
<body style="background-color: #eafaea">
<!--***********************************************************************-->
<header>
    <a href="#" ><img src="img/260231485_182966080712453_8150927369317930597_n.png" width="100%" height="100px" alt="Logo"></a>
    <!-- href "#" will move the scroll position to the top -->
    <nav class="navbar">
        <a href="#">Menu</a>
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
        <a href="chart.php" class="fas fa-shopping-cart"></a>
    </div>
</header>
<!--<br><br><br><br><br><br><br><br><br><br><br>-->
<!--<h1 class="headd" >New Offers</h1>-->
<!--<a href="cart.php"><img src="img/za.png" alt="" class="cart"></a>-->

<!--<div class="col-md-12">-->
<!--    <div class="row">-->
<!---->
<!---->
<!---->
<!--        --><?php
//
//        $dbHost     = "localhost";
//        $dbUsername = "root";
//        $dbPassword = "";
//        $dbName     = "green_life";
//        $flag=true;
//        // Create database connection
//        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//        $query = "SELECT * FROM `offer`";
//        $result=$db->query($query);
//        $count=1;
//        while ($row=mysqli_fetch_array($result)){
//            $z=$row['name'];
//            $p1=number_format($row['previous_price'],2);
//            $p2=number_format($row['new_price'],2);
//            $d=$row['description'];
//            $html='  <div class="col-md-4">
//            <form method="post" action="offer.php?action=add&id= '.$row["id"].'">
//                <div class="container">
//                    <img src="img/'.$row['img'].'" alt="Avatar" class="image">
//                    <div class="middle">
//                        <div class="nameofmeal"id="n'.$count.'"><b >'.$z.'</b></div>
//                        <div class="aa1"id="n'.$count.'"><b >'.$d.'</b><br></div>
//                        <div class="aa" id="z'.$count.'"><b><del>'.$p1.'$</del></b></div> <!-- القديم السعر-->
//                        <div class="aa">How much do you want from this?</div>
//                        <br>
//                        <input name="ff' . $count . '" type="text" class="field">
//                        <div class="aa" id="z'.$count.'"><b>'.$p2.'$</b></div> <!-- الجديد السعر-->
//                        <input name="add_to_cart'.$count.'" type="submit" value="Order Now" class="btn" ;>
//                    </div>
//                    <br><br>
//                </div>
//            </form>
//        </div>';
//
//            $count++;
//            echo $html;
//
//        }
//        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//        $query = "SELECT * FROM `offer`";
//        $result=$db->query($query);
//
//        for($x=1;$x<=15;$x++)
//            if (isset($_POST['add_to_cart' . $x])) {
//                $empty=$_POST['ff'.$x];
//                if($empty==''){
//                    ?>
<!--                    <script>alert(" Please Enter The Number ")</script>-->
<!--                --><?php
//                }
//                else{
//                $flag=true;
//                if (isset($_POST['add_to_cart'.$x])) {
//
//                $d =" SELECT `id`, `name`, `description`,`previous_price`,`new_price`, `image` FROM `offer` WHERE `id`=".$x;
//                $result=$db->query($d);
//                $followingdata = $result->fetch_assoc();
//                $pname="'". $followingdata['image']."'";
//                $f_price= $followingdata['new_price'];
//                $nn= "'".$followingdata['name']."'";
//                $quan= $_POST['ff'.$x];
//
//
//
//                $search=$db->query("SELECT * FROM `chart` WHERE `p_name`=".$nn);
//
//
//                while($row = mysqli_fetch_array($search)){
//
//                    $db->query("UPDATE `chart` SET `quantity`=".$quan." WHERE `p_name`=$nn");
//                    $flag = false;
//                }
//                if($flag){
//
//                    $insert=  $db->query("INSERT INTO `chart`(`name`, `price`, `quantity`, `p_name`,  `id`) VALUES ($pname,$f_price,$quan,$nn,$x)");
//
//                }
//                ?>
<!--                    <script>alert('Your request has been added successfully')</script>-->
<!--                    --><?php
//
//                }
//                }
//
//
//            }
//        ?>
        <!-------------      general menu start       ------------->
        <div class="empty1"></div>
        <div>
            <section class="smenu" id="smenu">

                <h1 class="heading1">Menu</h1>

                <div class="box-smenu">

                    <div class="box1">
                        <img src="img/img8.jpg" alt="">
                        <h3>chicken</h3>
                        <p>Eat Healthy.</p>
                        <a href="chicken.php" class="btn1">Show</a>
                    </div>

                    <div class="box1">
                        <img src="img/img10.jpg" alt="">
                        <h3>meat</h3>
                        <p>GREAT HAPPINESS IS FOOD</p>
                        <a href="meat.php" class="btn1">Show</a>
                    </div>

                    <div class="box1">
                        <img src="img/img11.jpg" alt="">
                        <h3>Fish and Seafood</h3>
                        <p>A FESTIVAL OF FLAVORS</p>
                        <a href="fish.php" class="btn1">Show</a>
                    </div>

                    <div class="box1">
                        <img src="img/img12.jpg" alt="">
                        <h3>Macaroni</h3>
                        <p>IN LOVE WITH PASTA</p>
                        <a href="macaroni.php" class="btn1">Show</a>
                    </div>

                    <div class="box1">
                        <img src="img/img14.jpg" alt="">
                        <h3>Soup</h3>
                        <p>MADE WITH LOVE</p>
                        <a href="soup.php" class="btn1">Show</a>
                    </div>

                    <div class="box1">
                        <img src="img/img15.jpg" alt="">
                        <h3>Healthy Sweets</h3>
                        <p>A TASTE OF HEAVEN</p>
                        <a href="sweet.php" class="btn1">Show</a>
                    </div>

                    <div class="box1">
                        <img src="img/img16.jpg" alt="">
                        <h3>Juices</h3>
                        <p>THE JOY OF TASTING</p>
                        <a href="juice.php" class="btn1">Show</a>
                    </div>

                    <div class="box1">
                        <img src="img/img17.jpg" alt="">
                        <h3>Salad</h3>
                        <p>EAT HEALTHY</p>
                        <a href="salad.php" class="btn1">Show</a>
                    </div>

                </div>
                <script src="JS_file.js"></script>

</body>
</html>
