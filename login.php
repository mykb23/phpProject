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
					$user["role"] = $row['authority'];
					$user["email"] =  $row['email'];
					$_SESSION['login'] = $user;
				}
				
				switch ($user["role"]) {
					case 'student':
					$redirect = 'student-dashboard.php';
					break;
					case 'staff':
					$redirect = 'staff-dashboard.php';
					break;
					case 'admin':
					$redirect = 'home.php';
					break;
				}
				
				header('Location: ' . $redirect);
				exit;

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