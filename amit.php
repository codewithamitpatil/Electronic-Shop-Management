<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php');
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Yashoda IceCream Parlour </title>
  </head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <body>






<?php include 'header.php';  ?>









<div class="login_signup_navbar">



<a href="#" class="login_signup_navbarLinks" style="    color:#ff4f00;font-size: 20px;">

Yashoda IceCream Parlour


</a>
<a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">
</a>
<a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">
</a>
<a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">
</a>
<a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">
</a>
<a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">
</a><a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">
</a><a href="#" class="login_signup_navbarLinks" style=""></a><a href="#" class="login_signup_navbarLinks" style="">
</a>


        <a href="view_ice_items.php" class="login_signup_navbarLinks active">View Items</a>
        <a href="add_ice_items.php" class="login_signup_navbarLinks ">Add Items</a>
        <a href="edit_ice_items.php"class="login_signup_navbarLinks ">Edit Items</a>
        <a href="delete_ice_items.php" class="login_signup_navbarLinks ">Delete items</a>
        <a href="view_order_details.php" class="login_signup_navbarLinks ">View Order Details</a>


<a href="logout_m.php" class="login_signup_navbarLinks">LogOut</a>





</div>





<div class="container">
  
<br>

  
<div class="row">


    

<div class="col-md-12">
  



<div class="panel panel-default">

<div class="panel-body" style="border-bottom: 2px solid grey;padding: 0px;margin:0px">
<table  class="table  " cellspacing="0" width="100%">
<thead style="background: -webkit-linear-gradient(left, #ff4f00,#3931af, #00c6ff);color:white">


<tr  style="color:  #3931af;font-weight:bolder;font-style: thin;">

<th style="font-weight:400;font-style: thin;color: white"> ID </th>

<th style="font-weight:400;font-style: thin;color: white">PHOTO</th>


<th style="font-weight:400;font-style: thin;min-width: 100px;color: white">ICE-CREAM NAME</th>
<th style="font-weight:400;font-style: thin;min-width: 80px;color: white"> PRICE  </th>
<th style="font-weight:400;font-style: thin;color: white">QUANTITY</th>
<th style="font-weight:400;font-style: thin;color: white">CUSTOMER</th>
<th style="font-weight:400;font-style: thin;color: white">ADDRESS</th>

</tr>
</thead>




<?php

$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM orders ORDER BY order_date";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

  <tbody>
    <?PHP
    $count=1;

      while($row = mysqli_fetch_assoc($result)){

$sql1 = "SELECT * FROM food WHERE F_ID='".$row['F_ID']."'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

    ?>


    <tr>

      <td><?php echo $count;?></td>
       <td>
        <img src=" <?php echo $row1["images_path"]; ?>" style="width: 100px;height: 100px;">

       </td>
      <td><?php echo $row["foodname"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
         <td><?php echo $row["username"]; ?></td>
               <td><?php echo $row["Address"]; ?></td>
    </tr>

  
  <?php   $count++; } ?>
    </tbody>
  </table>
    <br>


  <?php } else { ?>
<br>
  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>
.



</table>


</div>
</div>






</div><!--  col 12 end-->







    

</div><!--   ro end-->
</div>

  
  </body>
</html>