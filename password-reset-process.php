<?php
    require_once 'connection.php';
    require_once 'key.php';

    $user = $_SESSION['login'];

    if(isset($_POST['change'])) {

        $username = $user['id'];
        $password = $user['password'];
        
        $newPassword = $_POST['new'];
        $newPassword = md5(SALT.$newPassword);

        $confirmPassword = $_POST['confirm'];
        $confirmPassword = md5(SALT.$confirmPassword);
        
        if(empty($_POST['new']) && empty($_POST['confirm'])) {
            $_SESSION['changeEmpty'] = true;
            header('Location: password-reset.php');
            if($_POST['new'] == $_POST['confirm']) {
                $_SESSION['changeError'] = true;
                header('Location: password-reset.php');
            }
        }
        else {
            $query = "UPDATE `login` SET password = '$confirmPassword' WHERE id = '$username'";
            $result = mysqli_query($connection, $query);

            $_SESSION['change'] = true;
            header('Location: index.php');
        }
    }
    else {
        errorMove("D3 ".mysqli_error($connection)." in file ".__FILE__." at line ".__LINE__);
    }

        
?>