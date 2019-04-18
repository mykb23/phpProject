<?php
    require_once 'connection.php';
    require_once 'key.php';

    $user = $_SESSION['login'];

    if(isset($_POST['change'])) {

        $username = $user['id'];
        $password = $user['password'];
        // var_dump($password);
        
        $newPassword = $_POST['new'];
        $newPassword = md5(SALT.$newPassword);
        // var_dump($newPassword);
        $confirmPassword = $_POST['confirm'];
        $confirmPassword = md5(SALT.$confirmPassword);
        // var_dump($confirmPassword); 
        
        // $query = "select * from login WHERE id = '$username' AND password = '$password'";
        // $result = mysqli_query($connection, $query);
        
        if(empty($newPassword) !== TRUE && empty($confirmPassword) !== TRUE) {
            var_dump(empty($newPassword)); exit;
            $_SESSION['changeEmpty'] = true;
            header('Location: password-reset.php');

        }
        if($newPassword == $confirmPassword) {

            $query = "UPDATE `login` SET password = '$confirmPassword' WHERE id = '$username'";
            $result = mysqli_query($connection, $query);
            // var_dump($query); 
            
            $_SESSION['change'] = true;
            header('Location: index.php');

        }
        else {

            $_SESSION['changeError'] = true;
            header('Location: password-reset.php');
        }
        
    }
    else {
        errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
    }

        
?>