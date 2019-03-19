<?php
	function errorMove($error){
		$_SESSION['error'] = $error;
		header("Location: error.php");
		exit;
	}
