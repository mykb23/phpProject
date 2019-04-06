<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-admin.php';
$email = $_POST["mail"];
$pass = $_POST["pass"];
$pass = md5(SALT.$pass);
$right = "staff";
$token = "";
$dateMade = date("Y-m-d");

	$query = "INSERT INTO login (email, password, authority, token, date) VALUES ('$email', '$pass', '$right', '$token', '$dateMade')";
	$result = mysqli_query($connection, $query);
	if($result){
		$_SESSION['create'] = true;
		header("Location: staff-admin.php");
	}
	else {
		$_SESSION['err'] = true;
		header("Location: staff-admin.php");
	}
?>