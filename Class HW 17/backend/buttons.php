<?php
session_start();
$data_connect = mysqli_connect('localhost', 'root', '', 'newusers');
$name_change = $_POST['name_change'];
$new_name = $_POST['name'];
$email = $_SESSION['email'];
$id = $_SESSION['user_id'];
$photo_change = $_POST['photo_change'];



if($new_name && isset($_POST['name_change'])){
    $id = $_SESSION['user_id'];
    $change_query ="UPDATE users SET name='$new_name' WHERE id='$id';";
    mysqli_query($data_connect,$change_query);
    $_SESSION['user_name'] = $new_name;
    header("location: ../profile.php");
}
else{
    header("location: ../profile.php");
}


// if($new_name && $name_change){
//     $get_id = "SELECT id FROM users WHERE email='$email';";
//     $id_final = mysqli_query($data_connect, $get_id);
//     $id = mysqli_fetch_assoc($id_final)['id'];
//     $change_query ="UPDATE users SET name='$new_name' WHERE id='$id';";
//     mysqli_query($data_connect,$change_query);
//     $_SESSION['user_name'] = $new_name;
//     header("location: ../profile.php");
// }
// else{
//     header("location: ../profile.php");
//     $_SESSION['name-change']='please give a name first';

// }



    if(isset($_POST['photo_change'])){
        $photo = $_FILES['photo']['name'];
        print_r($_FILES);
        $old_extention = explode(".",$photo)['1'];
        $new_name = $id.".".$old_extention;
        $new_location = 'D:\xampp\htdocs\Class HW 15\components\images/'.$new_name;
        $old_location = $_FILES['photo']['tmp_name'];
        move_uploaded_file($old_location,$new_location);
        $photo_update = "UPDATE users SET photo ='$new_name' WHERE id='$id';";
        mysqli_query($data_connect,$photo_update);
        header('location: ../profile.php');
    }
    else{
    header('location: ../profile.php');
    }

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if(isset($_POST['password_change'])){
        $password_check = "SELECT password ='$old_password' FROM users WHERE email = '$email';";
        $old_password_check = mysqli_query($data_connect,$password_check);
        $password_assoc = mysqli_fetch_assoc($old_password_check)["password ='$old_password'"];
        if($password_assoc == 1 && $new_password==$confirm_password){
            $update_password = "UPDATE users SET password='$new_password' WHERE email='$email';";
            mysqli_query($data_connect,$update_password);
        }
    }

?>