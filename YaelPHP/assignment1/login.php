<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

	if ($username == "yaelsprikut@yahoo.com" && $password == "yaelsprikut")
	{
	header ( 'Location: /comp1230/assignments/assignment1/bootstrap_dashboard.php');
	$_SESSION['admin'] = $_POST['username'];
	}
	
	else {
	header ( 'Location: /comp1230/assignments/assignment1/bootstrap_login.php'); 
	die("Incorrect username and password!");
	}
	


?>
