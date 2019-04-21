<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-student.php';

$user = $_SESSION['login'];
$id = $user['id'];


    $query = "SELECT *
                FROM `student` 
                INNER JOIN `result`
                ON student.stuID = result.studID
                WHERE `stuID` = '$id'";
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
			<tr class='text-white'>
                <th>Reg No:<strong>{$record[0]['stuID']}</strong></th> <th>FullName: <strong>{$record[0]['name']}</strong></th> 
                <th>Level:<strong>{$record[0]['level']}</strong></th>  <th><button class='btn btn-info' onclick='window.print()'>Print Result</button></div></th>
            </tr>
            <tr>
                <td><strong><small>Course</small></strong></td> <td><strong><small>Course Code</small></strong></td> <td><strong><small>Score</small></strong></td> <td><strong><small>Course Unit</small></strong></td>
            </tr>
			
	";
	if($record){
		foreach ($record as $aRecord) {

			$table .= " <tr>
                            <td>{$aRecord['course']}</td> <td>{$aRecord['code']}</td> 
                            <td>{$aRecord['score']}</td>  <td>{$aRecord['unit']}</td>
                        </tr>";
			}
		}
		$table .= "</table>";

?>