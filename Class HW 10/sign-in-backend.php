<?php
session_start();
$email = $_POST['login_email'];
$password = $_POST['login_password'];
$flag = false;
$_SESSION['email'] = $email;
$data_base = mysqli_connect('localhost', 'root','' ,'newusers');
$email_select = "SELECT COUNT(*)AS results FROM users WHERE email='$email';";
$connecting_email = mysqli_query($data_base,$email_select);
$email_check = mysqli_fetch_assoc($connecting_email)['results'];

if($email_check==1){
    if($password){
        $password_select = "SELECT email='$email'FROM users WHERE password='$password';";
        $password_check = mysqli_query($data_base,$password_select);
        $after_check = mysqli_fetch_assoc($password_check)["email='$email'"];
        if($after_check==1){
            
        }
        else{
            $flag = true;
            $_SESSION['password_miss']="wrong password";
        }
    }
    else{
        $_SESSION['give_password'] = "please give the password";
        $flag = true;
    }
}
else{
    $flag = true;
    $_SESSION['email_miss']="your email dosen't match";
}

if($flag == 0){
    echo "login complete";
}
else{
    header('location: sign-in.php');
}




// $data_connect = mysqli_connect('localhost','root' ,'' ,'newusers');
// $data_test =  "SELECT COUNT(*)AS result FROM users WHERE email='$email' AND password='$password';";

// $data_marge= mysqli_query($data_connect, $data_test);
// $after_assoc = mysqli_fetch_assoc($data_marge)['result'];


// if($after_assoc == 1){
//     echo "login complete";
// }
// else{
//     header("location: sign-in.php");
// }

?>