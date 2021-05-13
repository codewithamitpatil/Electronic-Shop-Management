<?php
include('session_u.php');

if(!isset($_SESSION['login_user1'])){
header('Location:  index.php');
}

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

<h1 style="    color: skyblue;font-weight: 300">Admin Panel</h1>


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
<div class="col-sm-12">

<div class="mainmenu pull-left">
<ul class="nav navbar-nav collapse navbar-collapse">

<li><a href="index.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Home</a></li>

<li><a href="view_items.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> View Items</a></li>

<li><a href="add_items.php"class="active"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Add Items</a></li>

<li><a href="edit_items.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Edit Items</a></li>

<li><a href="delete_items.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Delete Items</a></li>

<li><a href="view_order_details.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Order Details</a></li>

<li><a href="logout_u.php" style="color: color:#dddcda;font-weight: 400"><i class="fa fa-lock" style="color:#dddcda;"></i> Logout</a></li>



</ul>
</div>
</div>

</div>
</div>
</div><!--/header-bottom-->
</header><!--/header-->










<section>
<div class="container">
<div class="row " >

<div class="col-sm-3"></div>
<div class="col-sm-6 padding-right  " style="padding:20px;padding-top: 0px; box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);margin-top: 20px;">






<form action="add_items.php" method="POST"   enctype="multipart/form-data">
<br style="clear: both">
<h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;color:skyblue;font-weight:400"> ADD NEW ITEM HERE. </h3>

<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="Name" >
</div>     

<div class="form-group">
<input type="text" class="form-control" id="price" name="price" placeholder=" Price (INR)" >
</div>

<div class="form-group">
<!-- <input type="text" class="form-control" id="description" name="description" placeholder=" Description"> -->
<select name="description" class="form-control form-control-lg">
  <option>Phone</option>
  <option>Desktop</option>
  <option>Laptop</option>
</select>



</div>

<div class="form-group">
<input type="file" name="fileToUpload" id="images_path">

</div>

<div class="form-group">
<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" style="background-color: #00b712;
background-image: linear-gradient(315deg, #00b712 0%, #5aff15 74%);outline: none;border:none;width: 150px;padding:10px;"> ADD ITEM </button>    
</div>
</form>




<?php


if(isset($_POST['submit'])){


	$dbhost = "sql312.epizy.com";
	$dbuser = "epiz_25817737";
	$dbpass = "O56L0XVsXFYG";
	$dbname = "epiz_25817737_electronic";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);




$name = $conn->real_escape_string($_POST['name']);
$price = $conn->real_escape_string($_POST['price']);
$description = $conn->real_escape_string($_POST['description']);


//$user_check=$_SESSION['login_user1'];


$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$images_path=$target_file;

$query = "INSERT INTO products(name,price,description,images_path) VALUES('" . $name . "','" . $price . "','" . $description . "','" . $images_path . "')";
$success = $conn->query($query);

if($success)
{
echo "Item added successfully...";
}else{
echo "Something went to wrong Please fill correct details...";
}

}


?>






</div>
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



