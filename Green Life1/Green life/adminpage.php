<?php
error_reporting(0);
session_start();
if (!$_SESSION['user']){
    header('location:sign_in.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Green Life</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body{

            background: -webkit-linear-gradient(left,#fbc2eb,#abcdef);
        }

        .navbar {
            width: 100%;
            background-color: rgba(255, 255, 255,0.3);
            overflow: auto;
            height: 7rem;

        }
        .link-1 {
            float: left;
            width:5%;
            text-align: center;
            transition: 0.3s ease;
            background-color: rgba(255, 255, 255,0);
            color: black;
            font-size: 17px;
            text-decoration: none;
            border-top: 4px white;
            border-bottom: 4px white;
            padding: 8px;
            margin-top: 15px;
            margin-left: 15%;
            font-family: myFirstFont2;


        }
        .link-1:hover {
            border-top: 2px solid #ffffff;
            border-bottom: 2px solid #ffffff;
            margin-top: 5px;
            margin-bottom: 4px;
        }
        .btn{
            margin-top: 1rem;
            display:inline-block;
            font-size: 1.5rem;
            /*color: #d6f5d6 ;*/
            /*background:  #78a3eb;*/
            margin-top: 1%;
            margin-left: 70%;
            color: black;
            border: white 3px solid;
            border-radius: .5rem;
            cursor: pointer;
            padding: .8rem 3rem;
            text-decoration: none;
            background-color:transparent;
        }
        .btn:hover{
            /*background: #27ae60;*/
            /*color: #d6f5d6;*/
            color: black;
            letter-spacing: .1rem;
            text-decoration: none;
        }

    </style>
</head>
<body >
<div class="navbar">

    <a class="link-1" href="../../../Users/zaytona/Desktop/Green%20Life/Green%20Life/offer.php" style="width:10% ;font-size: 15px;"><b>MENU</b></a>
    <a class="link-1" href="adminpage.php" style="width:10% ;font-size: 15px;margin-left: 25px"><b>ADD PRODUCT</b></a>
    <a class="link-1" href="adminpage2.php" style="width:10% ;font-size: 15px;margin-left: 25px"><b>DELETE PRODUCT</b></a>
    <a class="link-1" href="adminpage3.php" style="width:10% ;font-size: 15px;margin-left: 25px"><b>ADD OFFER</b></a>
    <a class="link-1" href="adminpage4.php" style="width:10% ;font-size: 15px;margin-left: 25px"><b>DELETE OFFER</b></a>
<!--    <a class="link-1" href="log_in.html" style="width:15% ;font-size: 15px;margin-left: 25px "><b>Log Out</b></a>-->
</div>
<form class="form-horizontal" method="get" >
    <fieldset>

        <!-- Form Name -->
        <h1 style="text-align: center">products you want to add</h1>

        <!-- Text input ID-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id" style="font-family: '."EB Garamond".', serif ">PRODUCT ID</label>
            <div class="col-md-4">
                <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input name-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name"  style="font-family: '."EB Garamond".', serif ">PRODUCT NAME</label>
            <div class="col-md-4">
                <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input description-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_description"  style="font-family: '."EB Garamond".', serif ">PRODUCT DESCRIPTION</label>
            <div class="col-md-4">
                <input id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION" class="form-control input-md" required="" type="text">

            </div>
        </div>




        <!-- Select Basic -->


        <!-- Text input price-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity"  style="font-family: '."EB Garamond".', serif ">PRICE</label>
            <div class="col-md-4">
                <input id="price" name="price" placeholder="PRICE" class="form-control input-md" required="" type="text">

            </div>
        </div>






        <!-- Text input-->



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="approuved_by"></label>
            <div class="col-md-4">

                <!-- File Button -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="filebutton"  style="font-family: '."EB Garamond".', serif ">main_image</label>
                    <div class="col-md-4">
                        <input  name="submit" type="file" >
                    </div>
                </div>

                <!-- File Button -->


                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Choose a section you want to add to it:</label>
                    <div class="col-md-4 ">
                        <form action="/adminpage.php" method="post">

                            <select name="green" class="btn" id="green">
                                <option value="fish and seafood">Fish and Seafood</option>
                                <option value="chicken">Chicken</option>
                                <option value="meat">Meat</option>
                                <option value="macaroni">Macaroni</option>
                                <option value="soup">Soup</option>
                                <option value="healthy Sweets">Healthy Sweets</option>
                            </select>
                            <br><br>
                            <input type="submit"  class="btn" value="Submit" name="za">
                        </form>

                    </div>

                </div>

    </fieldset>

</form>
<a href="log_in.html" tite="Logout"><button class="btn"> Click here to Logout.</button></a>


<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "green_life";
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if(isset($_GET['za'])) {

    $id = $_GET['product_id'];
    $name = "'".$_GET['product_name']."'";
    $description = "'".$_GET['product_description']."'";
    $price = $_GET['price'];
    $im="'".$_GET['submit']."'";
    $type=$_GET['green'];
    $table='';
    $flag=true;
    if($im==''){
        ?>
        <script>
            alert('Please choose image...')
        </script>
    <?php
    }
    else{
    if($type=='chicken'){
        $table='`chicken`';
    }
    elseif ($type=='meat'){
        $table='`meat`';
    }
    elseif ( $type=='fish and seafood'){
        $table='`fish`';
    }
    elseif ( $type=='macaroni'){
        $table='`macaroni`';
    }
    elseif ( $type=='salad'){
        $table='`salad`';
    }
    elseif ( $type=='juice'){
        $table='`juice`';
    }



    $search=$db->query("SELECT * FROM ".$table." WHERE `id`=".$id);
    while($row = mysqli_fetch_array($search)){
    $db->query("UPDATE ".$table." SET `name`=".$name.",`description`=".$description.",`price`=".$price.",`image`=".$im." WHERE `id`=".$id);
    $flag = false;
    ?>
        <p style="font-size:30px">Update done successfully...</p>
        <?php
    }
    if($flag){

        $insert=  $db->query("INSERT INTO ".$table."(`id`, `name`,`description` ,`price`, `image`) VALUES ($id,$name,$description,$price,$im)");
        ?>
        <p style="font-size:30px">Item added successfully...</p>
        <?php

    }
    }


}
?>

</body>
</html>
