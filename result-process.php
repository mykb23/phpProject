<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-staff.php';
require_once './templates/head.php';

	$query = "SELECT * FROM `subjects`";
	$result = mysqli_query($connection, $query);
	// $result2 = mysqli_query($connection, $query);
	// $result3 = mysqli_query($connection, $query);
    
    $options = "";
    $options1 = "";
    $options2 = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $options = $options."<option>{$row['course']}</option>";
        $options1 = $options1."<option>{$row['code']}</option>";
        $options2 = $options2."<option>{$row['course unit']}</option>";
    }

    if(isset($_POST['send'])) {
        $studId = $_POST['id']; $semester = $_POST['sem'];
        $firstSub = $_POST['sub'];   $firstCode = $_POST['code'];    $firstUnit = $_POST['unit'];   $firstScore = $_POST['score'];
        $secondSub = $_POST['sub2']; $secondCode = $_POST['code2'];  $secondUnit = $_POST['unit2']; $secondScore = $_POST['score2'];
        $thirdSub = $_POST['sub3'];  $thirdCode = $_POST['code3'];   $thirdUnit = $_POST['unit3'];  $thirdScore = $_POST['score3'];
        $fourthSub = $_POST['sub4']; $fourthCode = $_POST['code4'];  $fourthUnit = $_POST['unit4']; $fourthScore = $_POST['score4'];
        $fifthSub = $_POST['sub5'];  $fifthCode = $_POST['code5'];   $fifthUnit = $_POST['unit5'];  $fifthScore = $_POST['score5'];
        $sixthSub = $_POST['sub6'];  $sixthCode = $_POST['code6'];   $sixthUnit = $_POST['unit6'];  $sixthScore = $_POST['score6'];
        $seventhSub = $_POST['sub7']; $seventhCode = $_POST['code7'];  $seventhUnit = $_POST['unit7']; $seventhScore = $_POST['score7'];

        $query = "INSERT INTO `result`(studID, course, code, score, unit, semester) 
                    VALUES ('$studId', '$firstSub', '$firstCode', '$firstScore', '$firstUnit', '$semester'),
                            ('$studId', '$secondSub', '$secondCode', '$secondScore', '$secondUnit', '$semester'),
                            ('$studId', '$thirdSub', '$thirdCode', '$thirdScore', '$thirdUnit', '$semester'),
                            ('$studId', '$fourthSub', '$fourthCode', '$fourthScore', '$fourthUnit', '$semester'),
                            ('$studId', '$fifthSub', '$fifthCode', '$fifthScore', '$fifthUnit', '$semester'),
                            ('$studId', '$sixthSub', '$sixthCode', '$sixthScore', '$sixthUnit', '$semester'),
                            ('$studId', '$seventhSub', '$seventhCode', '$seventhScore', '$seventhUnit', '$semester')";

        $result = mysqli_query($connection, $query); 
        if($result){
            $_SESSION['create'] = true;
            header("Location: result-admin.php");
        }
        // else {
        //     $_SESSION['err'] = true;
        //     header("Location: result-admin.php");
        // }
        else {
			errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
		}
    }
?>