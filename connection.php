<?php
	require_once 'config.php';
	require_once 'functions.php';

	$connection = mysqli_connect(SERVER, USER, PASSWORD);
	if($connection){
		if(!mysqli_select_db($connection, DATABASE)){
			errorMove("D2 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}
	}
	else {
		errorMove("D1 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
	}
	