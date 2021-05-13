<?php




include('session_u.php');

if(!isset($_SESSION['login_user1'])){
header('Location:index.php');
}





$cheks = implode("','", $_POST['checkbox']);
$arr=array($_POST['checkbox']);


foreach ($_POST['checkbox'] as $key ) {

$sql = "DELETE FROM products WHERE F_ID ='$key'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));



}


header('Location: delete_items.php');
$conn->close();


?>