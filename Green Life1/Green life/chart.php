<?php
require_once 'test.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="chart.css">
    <meta charset="UTF-8">
    <title>Green Life</title>
    <style>
        body{
            /*background-image: url("img/background.jpg") ;*/
            /*background-color: lightblue;*/
        }

    </style>
    <link rel="stylesheet"  type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body >
<div class="navbar">
    <a class="link-1" href="secmain.html"><b>HOME</b></a>
    <a class="link-1" href="menu.html"><b>MENU</b></a>
    <a class="link-1" href="login.php"><b>LOGIN</b></a>
    <a class="link-1" href="try.html" style="width:8% "><b>About US</b></a>
    <a class="link-1" href="contactus.php" style="width:10% "><b>CONTACT US</b></a>
</div>
<br>
<a href="card.php"><img src="img/card.png" alt="" style="margin-left: 1200px;width: 50px;height: 50px"></a>
<div class="col-md-6" style="position: absolute;left:300px">
    <h2 style="padding-left: 210px;color: #27ae60" > Item Selected </h2>
    <?php
    $count1=1;
    $total="0";
    $output="";
    $output.="
                    <table class='table table-bordered table-striped'>
                   <tr style='background-color:  #d6f5d6'>   
                   <td>Item </td> 
                   <td>Item Number</td>
                   <td>Item Name </td> 
                   <td>Item Price </td> 
                   <td>Item Quantity</td>
                   <td>Total Price </td> 
                   <td>Action</td>    
                   </tr>
                   </tabel>
            ";

    $db = new mysqli("localhost", "root", "", "green_life");
    $search=$db->query("SELECT * FROM `chart`");
    $count=1;

    if($search==true){
    $output.="<form action='' method='get'>";
    while ($row=mysqli_fetch_array($search)){

        if($count++%2==0){
            $img="'".'img/'.$row['name']."'";
            $output.=" 
                        <tr style='background-color:  #d6f5d6'> 
                        <td><img class='z' src=".$img." alt='' ></td>
                        <td><input style='background-color: transparent;border-color: transparent' type='submit' name='id' value='".$row['id']."'></td> 
                        <td>".$row['p_name']."</td>
                        <td>$".$row['price']."</td>
                        <td>".$row['quantity']."</td>
                        <td>$".number_format($row['price']*$row['quantity'],2)."</td>
                        <td> 
       
                        <input style='border-color: #27ae60;background-color:   #27ae60' type='submit' value='remove' name="."'".'re'.$row['id']."'" .">
                   
                        </td>
                        </tr>";
            $total=$total+$row['price']*$row['quantity'];
        }
        else{
            $img="'".'img/'.$row['name']."'";
            $output.=" 
                     
                        <tr style='background-color:  #d6f5d6'> 
                        <td><img class='z' src=".$img." alt='' ></td>
                      
                        <td><input style='background-color: transparent;border-color: transparent' type='submit' name='id' value='".$row['id']."'></td>
                        <td>".$row['p_name']."</td>
                        <td>$".$row['price']."</td>
                        <td>".$row['quantity']."</td>
                        <td>$".number_format($row['price']*$row['quantity'],2)."</td>
                        <td> 
       
                        <input style='border-color: #27ae60;background-color: #27ae60' type='submit' value='remove' name="."'".'re'.$row['id']."'" ." >
                    
                        
                        </td>
                        
                        </tr>
                       
                       
                        
                        ";

            $total=$total+$row['price']*$row['quantity'];

        }


    }

    if($count%2==0) {

        $output .= " 
                       <tr style='background-color: #d6f5d6'> 
                       <td></td>
                       <td colspan='3'></td>
                       <td><b>Total Price</b></td>
                       <td>" . number_format($total, 2) . "</td>
                       <td> 
                       <a href='sweet1.php?action=cleanall'> 
                      <input style='border-color: #27ae60;background-color: #27ae60' type='submit' value='clean' name='clean' >

                       </a>
                       
                       </td>
                       </tr> 
                        ";
    }
    else{
        $output .= " 
                       <tr style='background-color: #d6f5d6'> 
                       <td colspan='3'></td>
                       <td></td>
                       <td><b>Total Price</b></td>
                       <td>" . number_format($total, 2) . "</td>
                       <td> 
                       <a href='sweet1.php?action=cleanall'> 
                      <input style='border-color: #27ae60;background-color: #27ae60' type='submit' value='clean' name='clean' >
                       
                       </a>
                       
                       </td>
                       </tr>";
    }
    $output.="</form>";
    echo $output;

    for($x=1;$x<=26;$x++) {
        if (isset($_GET['re' . $x])) {
            $s = $_GET['re' . $x];

            foreach ($_GET as $name => $value) {
                $delete = $db->query('DELETE FROM `chart` WHERE `id`=' . $x);
            }
        }
    }

    if(isset($_GET['clean'])){
        for($q=1;$q<=26;$q++){
            $check=$db->query('DELETE FROM `chart` WHERE `id`='.$q);

        }
//$clean=$db->query('DELETE  FROM `images`');


    }
    ?>
</div>

</div>


</div>



</div>


<?php
}
?>
</body>

</html>