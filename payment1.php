




<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>





  <?php






if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"],
'item_img'=>$_POST["hidden_img"],
'c_name'=>$_SESSION['fname']
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart1.php";</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart1.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"],
'item_img'=>$_POST["hidden_img"],
'c_name'=>$_SESSION['fname']
);
$_SESSION["cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["food_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="cart1.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart1.php"</script>';

}
}
}


?>








<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Payment</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>




<header id="header"><!--header-->



<div class="header-middle"><!--header-middle-->
<div class="container">
<div class="row">
<div class="col-md-4 clearfix">
<div class="logo pull-left">
<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
</div>



<div class="btn-group pull-right clearfix">



</div>
</div>
<div class="col-md-8 clearfix">
<div class="shop-menu clearfix pull-right">

<h1 style="    color: #5AFF15;font-weight: 300">Amit  Electronics</h1>




</div>
</div>
</div>
</div>
</div><!--/header-middle-->



<div class="header-bottom"><!--header-bottom-->
<div class="container">
<div class="row">
<div class="col-sm-9">

<div class="mainmenu pull-left">
<ul class="nav navbar-nav collapse navbar-collapse">

<li><a href="index.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Home</a></li>
<li><a href="cart1.php" class="active" style="font-weight: 400"><i class="fa fa-lock active" ></i>Cart (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else{
                echo "0";
              }
              ?>)</a></li>
<li><a href="logout_u.php" style="color: color:#dddcda;font-weight: 400"><i class="fa fa-lock" style="color:#dddcda;"></i> Logout</a></li>



</ul>
</div>
</div>
<div class="col-sm-3">
<div class="search_box pull-right">

</div>
</div>
</div>
</div>
</div><!--/header-bottom-->
</header><!--/header-->










<section>
<div class="container">
<div class="row">
<!-- <div class="col-sm-3">





</div>
-->

<div class="col-sm-12 padding-right">
<div class="features_items" id="myTable">



</div></div>






</div>
</div>
</section>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>





 <?php

if(!empty($_SESSION['cart']))
{



$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $add=$_SESSION["add"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);

    $username =$values["c_name"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username,Address) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $add . "')";
             

              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later...</p>
          </div>
        </div>

        <?php
      }
      
  }

        ?>
        <div class="container" style="background-color: #42378f;
background-image: linear-gradient(315deg, #42378f 0%, #f53844 74%);outline: none;border:none;">
          <div class="jumbotron"style="background-color: #42378f;
background-image: linear-gradient(315deg, #42378f 0%, #f53844 74%);outline: none;border:none;color: white;">
            <h1>Choose your payment option...</h1>
          </div>
        </div>
        <br>
<h1 class="text-center" style="color: #CB218E">Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</h1>
<h3 class="text-center" style="color: skyblue;font-weight: 300">including all service charges. (no delivery charges applied)</h3>
<br>
<h1 class="text-center">
  <a href="cart1.php"><button class="btn btn-warning" style="background-color: #fce043;
background-image: linear-gradient(315deg, #fce043 0%, #fb7ba2 74%);outline: none;border:none;width: 150px;padding:10px;"> Go back to cart-</button></a>
  <a href="COD.php"><button class="btn btn-success" style="background-color: #00b712;
background-image: linear-gradient(315deg, #00b712 0%, #5aff15 74%);outline: none;border:none;width: 150px;padding:10px;"> Cash On Delivery...</button></a>
</h1>
        


<br><br><br><br><br><br>


<?php
}else{

  header("location:index.php");
}

?>