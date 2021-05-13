<html>
<head>
    <title> Guest Signup | Yashoda IceCream Parlour </title>
  </head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




  <body style="  background-color:#e9ecef;">



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


        <a href="index.php" class="login_signup_navbarLinks ">Home</a>
        <a href="customerlogin.php" class="login_signup_navbarLinks active">Customer Login</a>
        <a href="admin.php"class="login_signup_navbarLinks ">Admin Login</a>
        




</div>












    <div class="container">
    <div class="jumbotron">
     <h1 style="color: #007bff">Hello Customer, <br> Welcome to <span class="edit"> Yashoda IceCream Parlour ! </span></h1>
     <br>
   <p style="color: #007bff">Create your account and order Ice cream.</p>
    </div>
    </div>



    <div class="container" style="margin-top:-100px; margin-bottom: 2%;">
      <div class="col-md-7 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading" style="padding: 10px"> Create Account </div>
        <div class="panel-body">
          
        <form role="form" action="customer_registered_success.php" style="margin-left: 0px" method="POST">
         
          <div class="row">
          <div class="form-group col-md-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
            <div class="input-group">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
              <span class="input-group-btn">
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-12">
            <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
            <div class="input-group">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-12">
            <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
            </div>           
          </div>
        </div>

        

        <div class="row">
          <div class="form-group col-md-12">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
    </body>

</html>