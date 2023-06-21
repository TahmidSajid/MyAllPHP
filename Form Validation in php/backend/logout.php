<?php

session_start();
session_unset();

$_SESSION['signin_msg'] = 'Enter Email & password to log in Dashboard';

header('location: ../signin.php');



?>