<?php
session_start();
$data_connect = mysqli_connect('localhost', 'root', '', 'newusers');
$name_change = $_POST['name_change'];
$new_name = $_POST['name'];
$email = $_SESSION['email'];



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
?>