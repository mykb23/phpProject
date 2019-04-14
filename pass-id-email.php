<?php
require_once 'connection.php';
require_once 'key.php';
require_once 'key-student.php';
require_once './templates/head.php';

$user["id"];

$query = "SELECT * FROM `login` WHERE `id` = $id";
$result = mysqli_query($connection, $query);

if($result){
    $record = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $record[] =  $row;
        $mail = $row['email'];
    }
}
// echo $mail
var_dump($user["id"]); exit;
// var_dump($id); exit;
?>