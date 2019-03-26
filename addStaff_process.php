<?php
require_once 'connection.php';
$email = $_POST["mail"];
$pass = $_POST["pass"];
$pass = md5(SALT.$pass);
$right = "staff";
$token = "";
$dateMade = date("Y-m-d");

	$query = "INSERT INTO login (email, password, authority, token, date) VALUES ('$email', '$pass', '$right', '$token', '$dateMade')";
	$result = mysqli_query($connection, $query);
	if($result){
	
	else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
	}


?>