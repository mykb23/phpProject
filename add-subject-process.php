<?php
require_once 'connection.php';
$course = $_POST["course"];
$code = $_POST["code"];
$score = $_POST["score"];

    $query = "INSERT INTO subjects (course, code, score) VALUES ('$course', '$code', '$score')";
	$result = mysqli_query($connection, $query);
	if($result){
		$_SESSION['create'] = true;
		header("Location: subject-admin.php");
	}
	else {
		$_SESSION['err'] = true;
		header("Location: subject-admin.php");
	}
?>