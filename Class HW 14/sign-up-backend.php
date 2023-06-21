<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];
$getback = false;
$preg_ma = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);

if($name){
    $_SESSION["name"] = $name;
}
else{
    $_SESSION["name-error"]="name is missing";
    $getback = true;
}
if($email){
    $data_connect =  mysqli_connect('localhost', 'root', '', 'newusers');
    $email_check = "SELECT COUNT(*)AS result FROM users WHERE email='$email';";
    $email_final = mysqli_query($data_connect,$email_check);
    $email_assoc = mysqli_fetch_assoc($email_final)['result'];
    $_SESSION['email'] = $email;
    print_r($email_assoc);
    if($email_assoc != 0){
        $_SESSION["used_email"]='this email has already an account';
        $getback = true;
    }
}
else{
    $_SESSION["email-error"]="email is missing";
    $getback = true;
}
if($password){
    $_SESSION['password'] = $password;
}
else{
    $_SESSION["password-error"]="password is missing";
    $getback = true;
}
if($confirm_password){
    $_SESSION['confirm_password'] = $confirm_password;
    if($password == $confirm_password){
        if($preg_ma == 0){
            $_SESSION['password_pregma'] = 'your password should be contain atleast 8 character and mix of naumber and spacial character';
            $getback = true;
        }
    }
    else{
        $_SESSION["miss-match"]= "password doesn't match";
        $getback = true;
    }
}
else{
    $_SESSION["confirm-password-error"]="con-password is missing";
    $getback = true;
}
if($getback == 1){
    header('location: sign-up.php');
}
else{
    $data_connect =  mysqli_connect('localhost', 'root', '', 'newusers');
    $data_path = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
    mysqli_query($data_connect,$data_path);
    header("location: sign-in.php");
    $_SESSION['account']='account created';
}





// if($name){
//     echo "name ache";
//     if($email){
//         echo "email ache";
//         if($password){
//             echo "pass ache";
//             if($confirm_password){
//                 echo "pass ache";
//                 if($password == $confirm_password){
//                     header("location: sign-in.php");
//                 }
//                 else{
//                     $_SESSION["miss-match"]= "password doesn't match";
//                     header("location: sign-up.php");
//                 }
//             }
//             else{
//                 $_SESSION["confirm-password"]="con-password is missing";
//                 header("location: sign-up.php");
//             }
//         }
//         else{
//             $_SESSION["password"]="password is missing";
//             header("location: sign-up.php");
//         }
//     }
//     else{
//         $_SESSION["email"]="email is missing";
//         header("location: sign-up.php");
//     }
// }
// else{
//     $_SESSION["name"]="name is missing";
//     header("location: sign-up.php");
// }


// if(!$name){
//     $_SESSION["name"]="name is missing";
//     header("location: sign-up.php");
// }
// if(!$email){
//     $_SESSION["email"]="email is missing";
//     header("location: sign-up.php");
// }
// if(!$password){
//     $_SESSION["password"]="password is missing";
//     header("location: sign-up.php");
// }
// if(!$confirm_password){
//     $_SESSION["confirm-password"]="con-password is missing";
//     header("location: sign-up.php");
// }
// if($password!=$confirm_password){
//     $_SESSION["miss-match"]= "password doesn't match";
//     header("location: sign-up.php");
// }

?>