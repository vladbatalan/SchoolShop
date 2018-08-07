<?php
	session_start();

	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "magazin";
	
	$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

?>