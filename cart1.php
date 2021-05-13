


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
<?php

?>









<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home | E-Shopper</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/price-range.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->       
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
<h1 style="    color: #5AFF15;font-weight: 300">Tapade  Electronics</h1>



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




<section id="cart_items">
<div class="container">




      <div class="jumbotron" style="background-color: #00b712;
background-image: linear-gradient(315deg, #00b712 0%, #5aff15 74%);">
        <h1 style="color:white;font-weight: 300">Your Shopping Cart...</h1>
      
<?php 

  if(!empty($_SESSION["cart"])){

echo ' <h4 style="color:white;">Looks tasty...!!!</h4>';

  } else{

   echo "      <h4 style='color:white;'>Oops! We can't smell any item here. Go back and <a href='index.php'>order now.</a></h4>
        ";

  }    
        


?>


      </div>
      


<?php  

$total = 0;

if(!empty($_SESSION["cart"])){


?>


<div class="table-responsive cart_info">
<table class="table table-condensed">
<thead>
<tr class="cart_menu" style="background:skyblue;">

<!-- <th width="40%">Item Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th> -->


<td class="image">Photo</td>
<td class="description">Item Name</td>

<td class="quantity">Quantity</td>
<td class="price">Price</td>
<td class="total">Total</td>
<td class="description">Action</td>
<td></td>
</tr>
</thead>

<tbody>



<?php  

$total = 0;


foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>


<td class="cart_product">
<a href=""><img style="width: 250px;" src="<?php echo $values["item_img"]; ?>" alt=""></a>
</td>


<td class="cart_description"><h4><a href=""><?php echo $values["food_name"]; ?></a></h4></td>
<td><p><h4><?php echo $values["food_quantity"] ?></h4></p></td>
<td class="cart_price"><p> <?php echo $values["food_price"]; ?></p></td>
<td  class="cart_price"><p> <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></p></td>
<td class="cart_delete"><a class="cart_quantity_delete"  href="cart1.php?action=delete&id=<?php echo $values["food_id"]; ?>"><i class="fa fa-times"></i></a></td>
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}





?>




<tr>
	<td></td>
<td colspan="3" align="right" class="cart_price"><p> Total</p></td>
<td align="right"class="cart_price"><p> <?php echo number_format($total, 2); ?></p></td>
<td></td>
</tr>

<tr>
	<td></td>	<td></td>	<td></td>
<td><a href="cart1.php?action=empty"><button class="btn btn-danger" style="background-color: #42378f;
background-image: linear-gradient(315deg, #42378f 0%, #f53844 74%);outline: none;border:none;width: 150px;padding:10px;"> Empty Cart</button></a></td>
<td><a href="index.php"><button style="background-color: #fce043;
background-image: linear-gradient(315deg, #fce043 0%, #fb7ba2 74%);outline: none;border:none;width: 150px;padding:10px;" class="btn btn-warning">Continue Shopping</button></a></td>
<td><a href="payment1.php"><button class="btn btn-success pull-right" style="background-color: #00b712;
background-image: linear-gradient(315deg, #00b712 0%, #5aff15 74%);outline: none;border:none;width: 150px;padding:10px;"> Check Out</button></a></td>

</tr>	





</tbody>
</table>
</div>
</div>
</section> <!--/#cart_items-->


<?php

}

?>















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