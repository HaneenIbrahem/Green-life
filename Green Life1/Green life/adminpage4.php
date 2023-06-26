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
<body>
<div class="navbar">

    <a class="link-1" href="../../../Users/zaytona/Desktop/Green%20Life/Green%20Life/offer.php" style="width:10% ;font-size: 15px;margin-left: 180px"><b>MENU</b></a>
    <a class="link-1" href="../../../Users/zaytona/Desktop/Green%20Life/Green%20Life/adminpage.php" style="width:15% ;font-size: 15px;margin-left: 25px""><b>ADD PRODUCT</b></a>
    <a class="link-1" href="../../../Users/zaytona/Desktop/Green%20Life/Green%20Life/adminpage2.php" style="width:15% ;font-size: 15px;margin-left: 25px"><b>DELETE PRODUCT</b></a>
    <a class="link-1" href="../../../Users/zaytona/Desktop/Green%20Life/Green%20Life/adminpage3.php" style="width:10% ;font-size: 15px;margin-left: 25px"><b>ADD OFFER</b></a>
    <a class="link-1" href="adminpage4.php" style="width:10% ;font-size: 15px;margin-left: 25px"><b>DELETE OFFER</b></a>
    <!--    <a class="link-1" href="chart.php" style="width:15% ;font-size: 15px;margin-left: 25px"><b>CHARTS</b></a>-->
</div>
<form class="form-horizontal" method="get">
    <fieldset>

        <!-- Form Name -->
        <h1 style="text-align: center">Offer you want to delete</h1>

        <!-- Text input ID-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_id" style="font-family: 'EB Garamond', serif ">PRODUCT ID</label>
            <div class="col-md-4">
                <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="approuved_by"></label>
            <div class="col-md-4">



                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Choose a section you want to delete from it:</label>
                    <div class="col-md-4 ">
                        <form action="/adminpage3.php">
                            <br><br>
                            <input type="submit" value="Submit" class="btn" name="z">
                        </form>

                    </div>

                </div>

    </fieldset>
    <a href="logout.php" tite="Logout"> <button class="btn"> Click here to Logout.</button></a>
</form>

<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "green_life";
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if(isset($_GET['z'])){
    $id = $_GET['product_id'];
//    $table='';
    $flag=true;
//    $type=$_GET['green'];


    $query = "SELECT * FROM offer WHERE `id`=".$id;
    $result=$db->query($query);
    while($row = mysqli_fetch_array($result)){
        $flag=false;
        $q="DELETE FROM offer WHERE `id`=".$id;
        $delete=$db->query($q);
        ?>
        <p style="font-size:30px">Item deleted successfully...</p>
        <?php
    }
    if($flag){
        ?>
        <p style="font-size:30px">Item not found...</p>
        <?php
    }
}

?>

</body>
</html>