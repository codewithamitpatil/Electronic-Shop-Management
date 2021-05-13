<?php

function Connect()
{
	$dbhost = "sql312.epizy.com";
	$dbuser = "epiz_25817737";
	$dbpass = "O56L0XVsXFYG";
	$dbname = "epiz_25817737_electronic";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>