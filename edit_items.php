<?php
include('session_u.php');

if(!isset($_SESSION['login_user1'])){
header('Location:index.php');
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

<li><a href="add_items.php"  style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Add Items</a></li>

<li><a href="edit_items.php" class="active" style="font-weight: 400;"><i class="fa fa-star"style="color:#dddcda;" ></i> Edit Items</a></li>

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
<div class="row">
<div class="col-sm-12  padding-right shadow">







<div class="container">
  <div class="row py-4" >
  


  

<div class="col-md-3 " style="padding:20px;padding-top: 0px; box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);margin-top: 60px;margin:0px;padding: 0px;width: 300px;">
  

    



    <div style="text-align: center;">
      <h3 style="color:skyblue;font-weight: 300">Click On Menu <br><br></h3>
    </div>


  <table class="table "style="text-align: center;font-weight: 200;font-size: 19px;">

    <tbody>
    



    <?php
   
 

    if (isset($_GET['submit'])) {
    $F_ID = $_GET['dfid'];
    $name = $_GET['dname'];
    $price = $_GET['dprice'];
    $description = $_GET['ddescription'];


    $query = mysqli_query($conn, "UPDATE products set
    name='$name', price='$price',
    description='$description' where F_ID='$F_ID'");
    }
    $query = mysqli_query($conn, "SELECT * FROM products ORDER BY F_ID");
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group" style="text-align: center;font-weight: 300">
        <?php
      echo "   <tr>
        <td>
      
  
       <b><a href='edit_items.php?update= {$row['F_ID']}'>{$row['name']}</a></b></td></tr>";  
        ?>
      </div>


    <?php
    }
    ?>
    
    </tbody>
  </table>

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($conn, "SELECT * FROM products WHERE F_ID=$update");
    while ($row1 = mysqli_fetch_array($query1)) {

    ?>
</div>





<div class="col-md-6 py-4" style="padding:20px;padding-top: 0px; box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);margin-top:0px;margin-left: 100px">
  




          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;color:skyblue;font-weight: 400"> EDIT YOUR  ITEMS HERE... </h3>


        <form action="edit_items.php" method="GET" >
        <br style="clear: both">

          <div class="form-group">
            <input class='input' type='hidden' name="dfid" value=<?php echo $row1['F_ID'];  ?> />
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span>Name: </label>
            <input type="text" class="form-control" id="dname" name="dname" value="<?php echo $row1['name'];  ?>" placeholder=" Name" required="">
          </div>     

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Price: </label>
            <input type="text" class="form-control" id="dprice" name="dprice" value="<?php echo $row1['price'];  ?>" placeholder="Price (INR)" required="">
          </div>

          <div class="form-group">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span>Categries: </label>
            <input type="text" class="form-control" id="ddescription" name="ddescription" value="<?php echo $row1['description'];  ?> "placeholder=" Description" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()"style="background-color: #00b712;
background-image: linear-gradient(315deg, #00b712 0%, #5aff15 74%);outline: none;border:none;width: 150px;padding:10px;" value="Display alert box" > Update </button>    
      </div>
        </form>


    <?php
}
}


  ?>
      





</div>


<?php
mysqli_close($conn);
?>
</div>




</div><!---  col 3 end-->




</div>
</div>

    


    













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





















