<?php
require 'connection.php';
$conn = Connect();

session_start();


if(isset($_SESSION['login_user2']))
{

$user_check=$_SESSION['login_user2'];




$query = "SELECT * FROM user WHERE username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];


	
}


?>