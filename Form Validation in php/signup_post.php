<?php 

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$flag = false;
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);


if($name){
    $_SESSION['old_name'] = $name;
}
else{
    $_SESSION['name_error'] = 'Plz Enter Name!!!';
    $flag = true;
}

if($email){
    $_SESSION['old_email'] = $email;
}
else{
    $_SESSION['email_error'] = 'Plz Enter E-mail!!!';
    $flag = true;
}


if($password){
    echo "Password Ache <br>";
    if($password != $confirm_password){
        $_SESSION['confirm_password_error'] = 'Password & Confirm Password Does Not Match';
        $flag = true;
    }
    else{
        if($preg_maa != 1){
            $_SESSION['preg_match_err'] = 'your password does not meet security requirements';
            $flag = true;
        }
    }
}
else{
    $_SESSION['password_error'] = 'Plz Enter Password!!!';
    $flag = true;
}


if($confirm_password){
    echo "Confirm Password Ache <br>";
}
else{
    $_SESSION['confirm_password_error'] = 'Plz Enter Confirm Password!!!';
    $flag = true;
}

if($flag == 1){
    header('location: signup.php');
}
else{

    $encrypt_password = md5($password);
    
   $db_connect = mysqli_connect('localhost', 'root', '', 'php');

   $insert_data = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$encrypt_password')";

   mysqli_query($db_connect, $insert_data);

   header('location: signin.php');

   $_SESSION['success_message'] = "$name Congratulations Your Registration Successfully Done";

   $_SESSION['success_email'] = $email;


}




?>