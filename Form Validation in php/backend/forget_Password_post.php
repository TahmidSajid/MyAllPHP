<?php

session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'php');

$email = $_POST['reset_email'];

$_SESSION['pass_email'] = $email;

$db_email = "SELECT Email FROM users Where Email = '$email'";

$db_email_query = mysqli_query($db_connect, $db_email);

$db_email_assoc = mysqli_fetch_assoc($db_email_query)['Email'];

$_SESSION['forget_email'] = $db_email_assoc;


if($email){
    
    if($email == $db_email_assoc){
        header('location: password_changed.php');
    }
    
    else{

        $_SESSION['email_err'] = 'Your Email Does Not Match';
        header('location: forget_Password.php');
    
    }
}
else{

    $_SESSION['email_err'] = 'Plz Enter Email';
    header('location: forget_Password.php');

}


?>