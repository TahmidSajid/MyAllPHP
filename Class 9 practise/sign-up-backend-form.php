<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];
$preg_match = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);
$flag = false;
$data_connect = mysqli_connect('localhost', 'root', '','practice');
if(!$name){
    $_SESSION['name-error'] = "name is missing";
    $flag = true;
}
else{
    $_SESSION['name'] = "$name";
}
if(!$email){
    $_SESSION['email-error']= "email is missing";
    $flag = true;
}
else{
    $_SESSION['email'] = "$email";
}
if(!$password){
    $_SESSION['password-error']= "password is missing";
    $flag = true;
}
else{
    $_SESSION['password'] = "$password";
}
if(!$confirm_password){
    $_SESSION['con-password-error']= "confirm password missing";
    $flag = true;
}
else{
    $_SESSION['confirm-password'] = "$confirm_password";
    if($password!=$confirm_password){
        $_SESSION['con-password-match-error']= "confirm password dosen't match";
        $flag = true;
    }
    else{
        if($preg_match==0){
            $_SESSION['preg_error']= 'your password is not strong';
            $flag = true;
        }
    }
}
if($flag==1){
    header("location: sign-up.php");
}
else{
    header("location: sign-in.php");
    $insert_query = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password');";
    mysqli_query($data_connect,$insert_query);
}
?>