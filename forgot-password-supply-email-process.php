<?php
	require_once 'connection.php';
	if(isset($_POST['token']) && $_POST['token'] = $_SESSION['token']){
		unset($_SESSION['token']);
		$email = $_POST['email'];
		
		$query = "select * from login WHERE email = '$email'";
		$result = mysqli_query($connection, $query);
		if($result){
			if(mysqli_num_rows($result)){
				$token = "";
				for ($i=0; $i < 16; $i++) { 
					$token .= chr(rand(65, 90));
				}
				$query = "update login SET token = '$token' WHERE email = '$email'";
				$result = mysqli_query($connection, $query);
				if(!$result){
					errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
				}
				$link = URL."forgot-password-token.php?email=".urldecode($email)."&token=".urlencode($token);
				if(!DEVELOPMENT){
					mail($email, "Password Reset Token", $link);
				}
				$_SESSION['tokenSent'] = "Please check your email for instruction on how to change your password";
				if(DEVELOPMENTl) $_SESSION['tokenSent'] .=" $link"; 
				header("Location: forgot-password-supply-email.php");
			}
			else {
				$_SESSION['noEmail'] = "$email is not associated with any user on the portal";
				header("Location: forgot-password-supply-email.php");
			}
			exit;
		}
		else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}
	}