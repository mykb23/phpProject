<?php
	require_once 'connection.php';
	if(isset($_POST['token']) && $_POST['token'] = $_SESSION['token']){
		unset($_SESSION['token']);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5(SALT.$password);
		
		$query = "update login SET password = '$password'WHERE email = '$email'";
		$result = mysqli_query($connection, $query);
		if(!$result){
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}
		$_SESSION['passwordChange'] = "You have successfully changed your pasasword";
		header("Location: forgot-password-token.php");
	}