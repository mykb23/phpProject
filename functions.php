<?php
	function errorMove($error){
		$_SESSION['error'] = $error;
		header("Location: error.php");
		exit;
	}

	function accessControl($right, $con){
		$user = $_SESSION['login'];
	
		$query = "SELECT * FROM login WHERE id = '{$user['id']}'";
		$result = mysqli_query($con, $query);
		if($result){
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
			$authority = $row[0]['authority'];
		}
		else {
			errorMove("D3 ".mysqli_error($con)." in file ".__FILE__." at line ".__LINE__);
		}
		
		if($authority != $right){
			header("location: home.php");
			exit;
		}
	}
