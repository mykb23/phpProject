<?php
require_once 'connection.php';
require_once 'key.php';
require_once './templates/head.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM `login` WHERE `id` = '$id'";
        $result = mysqli_query($connection, $query);
        // var_dump($query); exit;
        
        $_SESSION['message'] = true;
		header("Location: staff-admin.php");
    }
?>