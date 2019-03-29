<?php
require_once 'connection.php';
$email = $_POST["mail"];
$pass = $_POST["pass"];
$pass = md5(SALT.$pass);
$right = "student";
$token = "";
$dateMade = date("Y-m-d");

	$query = "INSERT INTO login (email, password, authority, token, date) VALUES ('$email', '$pass', '$right', '$token', '$dateMade')";
	$result = mysqli_query($connection, $query);
	if($result){
		$_SESSION['create'] = true;
		header("Location: student-admin.php");
	}
	else {
		$_SESSION['err'] = true;
		header("Location: student-admin.php");
	}
?>