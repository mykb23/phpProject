<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-student.php';
require_once './templates/head.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['mail'];
    $fullName = $_POST['fullname'];
    $gender = $_POST['gender'];
    $level = $_POST['level'];
    $semester = $_POST['semester'];
    
    $query = "INSERT INTO student (stuID, name, email, gender, level, semester) VALUES ('$id', '$fullName', '$email', '$gender', '$level', '$semester')";
    $result = mysqli_query($connection, $query); 
    if($result){
		$_SESSION['update'] = true;
		header("Location: student-dashboard.php");
	}
	else {
		$_SESSION['uperr'] = true;
		header("Location: student-dashboard.php");
	}
}
?>