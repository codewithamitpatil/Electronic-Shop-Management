
<?php
include('login_u.php'); 


if(isset($_SESSION['login_user1'])){
header("location: view_items.php"); 
}


if(isset($_SESSION['login_user2'])){
header("location: index.php"); 
}




?>

<?php


if(isset($_POST['signup']))
{


require 'connection.php';
$conn = Connect();

$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);

$query = "INSERT into user(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}else{

echo '<script type="text/javascript">
  
alert("signup success");

</script>';

}

$conn->close();


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
<li><a href="" class="active" style="font-weight: 400"><i class="fa fa-lock active" ></i>Login</a></li>
<!-- <li><a href="logout_u.php" style="color: color:#dddcda;font-weight: 400"><i class="fa fa-lock" style="color:#dddcda;"></i> Logout</a></li> -->



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










<section style="margin-top: -100px;">
<div class="container">
<div class="row">






<section id="form"><!--form-->
<div class="container">
<div class="row">
<div class="col-sm-4 col-sm-offset-1">
<div class="login-form"><!--login form-->
<h2>Login to your account</h2>
<form action="" method="POST">
<input type="text" name="username" autocomplete="off" placeholder="Username" />
<input type="text" name="password" autocomplete="off"    placeholder="Password" />

<button type="submit" name="submit"   class="btn btn-default">Login</button>
</form>
<br><br>
<span><?php echo $error;  ?></span>

</div><!--/login form-->
</div>
<div class="col-sm-1">
<h2 class="or">OR</h2>
</div>
<div class="col-sm-4">
<div class="signup-form"><!--sign up form-->
<h2>New User Signup!</h2>
<form action="" method="POST">

<input type="text" autocomplete="off"  name="fullname" placeholder="Your Full Name" required=""/>

<input type="text" name="username" placeholder="Your Username"autocomplete="off"   required=""/>

<input type="text" type="email" name="email" placeholder="Email"autocomplete="off"  required=""/>

<input type="text" autocomplete="off"  name="contact" placeholder="Contact" required=""/>

<input type="text"  autocomplete="off"  name="address" placeholder="Address" required=""/>



<input type="password" autocomplete="off"  name="password" placeholder="Password" required=""/>
<button type="submit" name="signup" class="btn btn-default">Signup</button>
</form>
</div><!--/sign up form-->
</div>
</div>
</div>
</section><!--/form-->







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







  











