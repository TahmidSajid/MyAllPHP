<?php

session_start();

// Email & Password value Catch From Signin page //

$email = $_POST['login_email'];
$password = md5($_POST['login_password']);
$flag = false;

// Email & Password value Catch From Signin page //


// Database Connect Process Start //

$db_connect = mysqli_connect('localhost', 'root', '', 'php');

$count_insert = "SELECT COUNT(*) AS 'results' FROM users WHERE Email = '$email' && Password = '$password';";

$db_query = mysqli_query($db_connect, $count_insert);

$after_assoc = mysqli_fetch_assoc($db_query)['results'];


// Database Connect Process End //


// Email & Password Validation Start //

if (!$email) {

    $_SESSION['login_email_err'] = "Plz Enter Email & Password to Log in !!! ";
    $flag = true;
} else {

    if (!$password) {
        $_SESSION['login_password_err'] = 'Your Email Or Password is Incorrect';

        $flag = true;
    } else {
        if ($after_assoc == 1) {

            // Log in Success & Dashboard Success Message Start 

            header("location: backend/Database.php");

            $dash_values = "SELECT ID, Name, Email FROM users WHERE Email = '$email'";

            $dash_query = mysqli_query($db_connect, $dash_values);

            $dash_assoc = mysqli_fetch_assoc($dash_query);

            $_SESSION['s_name'] = $dash_assoc['Name'];

            $_SESSION['s_email'] = $dash_assoc['Email'];

            $_SESSION['s_id'] = $dash_assoc['ID'];

            // Log in Success & Dashboard Success Message End

        } else {
            $_SESSION['login_err'] = 'Your Email Or Password is Incorrect';
            $flag = true;
        }
    }
}

// Email & Password Validation End //

// Error Message Send Start //

if ($flag == 1) {
    header('location: signin.php');
}

// Error Message Send End //
?>