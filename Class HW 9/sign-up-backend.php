<?php
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];

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

if($name){
    echo "name ache";
}
else{
    $_SESSION["name"]="name is missing";
    header("location: sign-up.php");
}
if($email){
    echo "email ache";
}
else{
    $_SESSION["email"]="email is missing";
    header("location: sign-up.php");
}
if($password){
    echo "pass ache";
}
else{
    $_SESSION["password"]="password is missing";
    header("location: sign-up.php");
}
if($confirm_password){
    echo "pass ache";
    if($password == $confirm_password){
        header("location: sign-in.php");
    }
    else{
        $_SESSION["miss-match"]= "password doesn't match";
        header("location: sign-up.php");
    }
}
else{
    $_SESSION["confirm-password"]="con-password is missing";
    header("location: sign-up.php");
}
?>