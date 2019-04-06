<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-staff.php';
require_once './templates/head.php';

	$query = "SELECT * FROM `login` WHERE `authority` = 'student'";
	$result = mysqli_query($connection, $query);
	
	if($result){
		$record = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$record[] =  $row;
			// echo "Customer Successfully Deleted";
		}
	}
	else {
		errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
	}
	
	$table = "
		<table class='table table-bordered'>
			<tr class='bg-dark text-white'>
				<th>ID</th> <th>Right</th> <th>Email</th> <th>Action</th>
			</tr>
	";
	if($record){
		foreach ($record as $aRecord) {

			$table .= "<tr>
					<td>{$aRecord['id']}</td> <td>{$aRecord['authority']}</td> 
					<td>{$aRecord['email']}</td> 
                    <td><a href='student-process.php?delete=".$aRecord['id']."'>
					<i class='fa fa-trash text-danger' aria-hidden='true' style='font-size:20px;'></i>                    
                    </a></td> 
				</tr>";
        }
	}
	$table .= "</table>";

if(isset($_POST['send'])) {
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
}

if(isset($_GET['delete'])) {
	$id = $_GET['delete'];

	$query = "DELETE FROM `login` WHERE `id` = '$id'";
	$result = mysqli_query($connection, $query);
	// var_dump($query); exit;
	
	$_SESSION['del'] = true;
	header("Location: student-admin.php");
}
?>