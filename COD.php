




<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION['cart']);
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

<h1 style="    color: #5AFF15;font-weight: 300">Tapade Electronics</h1>



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




      <div class="container">
          <div class="jumbotron" style="background-color: #63a4ff;
background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);">
            <h1 class="text-center" style="color: white;">Hurreee!!! Order Placed Successfully.</h1>
          </div>
        </div>
        <br>






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







  



