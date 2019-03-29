<?php
	require_once 'connection.php';
	if(isset($_POST['token']) && $_POST['token'] = $_SESSION['token']){
		unset($_SESSION['token']);
		$username = $_POST['studentNo'];
		$password = $_POST['password'];
		$password = md5(SALT.$password);
		
		$query = "select * from login WHERE id = '$username' AND password = '$password'";
		$result = mysqli_query($connection, $query);
		if($result){
			if(mysqli_num_rows($result)){
				while ($row = mysqli_fetch_assoc($result)) {
					$user["id"] =  $row['id'];
					$user["password"] =  $row['password'];
					$_SESSION['login'] = $user;
				}
				header("Location: home.php");
				header("Location: staff-dashboard.php");
				exit;
				// if($user['id']) {
				// 	$user['right'] = $row['right'];
				// 	header("Location: home-staff.php");
				// }
			}
			else {
				$_SESSION['loginFailed'] = true;
				header("Location: index.php");
				exit;
			}
		}
		else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}
	}