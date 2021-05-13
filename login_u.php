<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

require 'connection.php';
$conn = Connect();

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'  LIMIT 1";

$res= $conn->query($query);

$data=$res->fetch_assoc();



// $stmt = $conn->prepare($query);
// $stmt -> bind_param("ss", $username, $password);
// $stmt -> execute();
// $stmt -> bind_result($username, $password);
// $stmt -> store_result();

if ($data)  
{

	if($data['cid']==1)
	{

$_SESSION['login_user1']=$username;

	header("location:view_ice_items.php");



	}else{


$_SESSION['login_user2']=$username;

	$_SESSION['add']=$data['address'];
     $_SESSION['fname']=$data['fullname'];

$_SESSION['full_na']=$data['fullname'];

	header("location: index.php");


	}

	
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn);
}
}
?>