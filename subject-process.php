<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-staff.php';

$update = false;
$course ="";
$code ="";
$unit ="";
$id ="";

	$query = "SELECT * FROM `subjects`";
	$result = mysqli_query($connection, $query);
	if($result){
        $record = [];
		while ($row = mysqli_fetch_assoc($result)) {
            $record[] =  $row;
		}
	}
	else {
        errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
	}
	
	$table = "
		<table class='table table-bordered'>
			<tr class='bg-dark text-white'>
				<th>Course</th> <th>Code</th> <th>Unit</th> <th>Action</th> 
			</tr>
	";
	if($record){
		foreach ($record as $aRecord) {

			$table .= "<tr>
					<td>{$aRecord['course']}</td> <td>{$aRecord['code']}</td> <td>{$aRecord['course unit']}</td> 
					<td>
					<a href='subject-admin.php?edit=".$aRecord['id']."&course=".$aRecord['course']."&code=".$aRecord['code']."&unit=".$aRecord['course unit']."'>
					<i class='fa fa-pencil text-info pr-2' aria-hidden='true' style='font-size:20px;'></i>
					</a> 
				
					<a href='subject-process.php?delete=".$aRecord['id']."'>
					<i class='fa fa-trash text-danger' aria-hidden='true' style='font-size:20px;'></i>
					</a> 
					</td> 
				</tr>";
			}
		}
		$table .= "</table>";

if(isset($_POST['send'])) {
	$course = $_POST["course"];
	$code = $_POST["code"];
	$unit = $_POST["unit"];

		$query = "INSERT INTO subjects (course, code, course unit) VALUES ('$course', '$code', '$unit')";
		$result = mysqli_query($connection, $query);
		if($result){
			$_SESSION['create'] = true;
			header("Location: subject-admin.php");
		}
		else {
			$_SESSION['err'] = true;
			header("Location: subject-admin.php");
		}
}
if(isset($_GET['delete'])) {
	$id = $_GET['delete'];

		$query = "DELETE FROM `subjects` WHERE `id` = $id";
		$result = mysqli_query($connection, $query);
		
		$_SESSION['del'] = true;
		header("Location: subject-admin.php");
	}

if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$course =$_GET['course'];
		$code =$_GET['code'];
		$unit = $_GET['unit'];
		$update = true;
	}

if(isset($_POST['update'])) {
		$id =$_POST['id'];
		$course =$_POST['course'];
		$code =$_POST['code'];
		$unit =$_POST['unit'];
		
		$query = "UPDATE `subjects` SET `course`= '$course',`code`= '$code', `course unit`= '$unit' WHERE `id` = $id";
		$result = mysqli_query($connection, $query);

		$_SESSION['update'] = true;
		header("Location: subject-admin.php");
	}
?>