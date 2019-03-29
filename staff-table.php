<?php
require_once 'connection.php';
require_once 'key.php';
require_once './templates/head.php';

	$query = "SELECT * FROM `login` WHERE `authority` = 'staff'";
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
				<th>ID</th> <th>Right</th> <th>Email</th> <th></th>
			</tr>
	";
	if($record){
		foreach ($record as $aRecord) {

			$table .= "<tr>
					<td>{$aRecord['id']}</td> <td>{$aRecord['authority']}</td> 
					<td>{$aRecord['email']}</td> 
					<td><a href='delete.php?id=".$aRecord['id']."'><button class='btn btn-danger'>Delete</button></a></td> 
				</tr>";
		}
	}
	$table .= "</table>";
	echo $table;

?>