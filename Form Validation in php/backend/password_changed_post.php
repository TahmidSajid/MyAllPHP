<?php

session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'php');

$reset_password = $_POST['reset_password'] ;

$confirm_reset_password = $_POST['confirm_reset_password'] ;

$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $reset_password);

// print_r($_POST);

if(!$reset_password){
    $_SESSION['reset_password'] = 'Enter Reset Password';
    header('location: password_changed.php');
}
else{
    if($reset_password != $confirm_reset_password){
        $_SESSION['confirm_password'] = 'Password & Confirm Password Not Matched !!!';
        header('location: password_changed.php');
    }
    else{
        if($preg_maa == 1){

            $f_email = $_SESSION['forget_email'];
            
            $enc_pass = md5($reset_password);
    
            $reset_pass = "UPDATE users SET Password = '$enc_pass' WHERE Email = '$f_email'";
    
            $reset_pass_query = mysqli_query($db_connect, $reset_pass);

            // print_r($reset_pass_query);

            $_SESSION['password_success_msg'] = 'Your Password Is reset !!!';

            header('location: ../signin.php');
        }
        else{
            $_SESSION['reset_preg_match'] = 'your password does not meet security requirements';
            header('location: password_changed.php');
        }
    }
}


if(!$confirm_reset_password){
    $_SESSION['confirm_password'] = 'Enter Confirm Password';
    header('location: password_changed.php');
}









?>
