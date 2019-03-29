<?php
require_once 'connection.php';
require_once 'key.php';
require_once './templates/head.php';

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
    // var_dump($record); exit;
	
	$table = "
		<table class='table table-bordered'>
			<tr class='bg-dark text-white'>
				<th>ID</th> <th>Course</th> <th>Code</th> <th></th> <th></th>
			</tr>
	";
	if($record){
		foreach ($record as $aRecord) {

			$table .= "<tr>
					<td>{$aRecord['id']}</td> <td>{$aRecord['course']}</td> 
					<td>{$aRecord['code']}</td> 
					<td><a href='edit-subject.php?id=".$aRecord['id']."'><button class='btn btn-info'>Edit</button></a></td> 
					<td><a href='delete-subject.php?id=".$aRecord['id']."'><button class='btn btn-danger'>Delete</button></a></td> 
				</tr>";
		}
	}
	$table .= "</table>";
	echo $table;

?>