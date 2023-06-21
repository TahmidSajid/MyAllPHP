<?php 

session_start();

$db_connect = mysqli_connect('localhost', 'root', '', 'php');

if(isset($_POST['name_change'])){

    $name = $_POST['name'];
    
    $id = $_SESSION['s_id'];
    
    $name_update = "UPDATE users SET Name = '$name' WHERE ID = '$id'";

    $name_query = mysqli_query($db_connect, $name_update);

    $_SESSION['s_name'] = $name;

    header('location: profile.php');

    
}

if(isset($_POST['photo_change'])){

    $photo = $_FILES['photo']['name'];

    $explode = explode('.', $photo);

    $extenion = end($explode);

    $id = $_SESSION['s_id'];
    
    $user = $id . "." . $extenion;

    $old_location = $_FILES['photo']['tmp_name'];

    $new_location = 'D:\programs\xampp\htdocs\Form Validation in php/images/' . $user;

    $final_upload = move_uploaded_file($old_location , $new_location);

    header('location: profile.php');

}

if(isset($_POST['email_change'])){

    $email = ($_POST['email']);
    
    $id = $_SESSION['s_id'];


    $db_email = "SELECT COUNT(*) AS 'email_check' FROM users WHERE Email = '$email'";

    $db_email_query = mysqli_query($db_connect, $db_email);

    $db_email_assoc = mysqli_fetch_assoc($db_email_query)['email_check'];

    if($db_email_assoc == 1){
        echo 'this Email Already Exist';
    }
    else{
    
        
        $email_update = "UPDATE users SET Email = '$email' WHERE ID = '$id'";
        
        $email_query = mysqli_query($db_connect, $email_update);
    
        $_SESSION['s_email'] = $email;
    
        header('location: profile.php');
    }
}

   
if(isset($_POST['password_change'])){

    $id = $_SESSION['s_id'];

    $old_pass = "SELECT Password FROM users WHERE id = '$id'";

    $old_pass_query = mysqli_query($db_connect, $old_pass);

    $old_pass_assoc = mysqli_fetch_assoc($old_pass_query)['Password'];

    $old_password = md5($_POST['old_password']);
    
    $new_password = $_POST['new_password'];
    
    $confirm_new_password = $_POST['confirm_new_password'];
    
    $preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_password);


    if($old_password){
        echo 'Enter Old Password <br>';
    }
    else{
        header('location: profile.php');
    }

        if(!$new_password){
            echo 'Enter new Password <br>';
        }
        else{
            
            if(!$confirm_new_password){
                echo 'Enter Confirm Password <br>';
            }
            else{
                if($old_pass_assoc == $old_password){
    
                    if($new_password == $confirm_new_password){
            
                        if($preg_maa == 1){
            
                            $enc_pass = md5($new_password);
            
                            $update_pass = "UPDATE users SET Password = '$enc_pass' WHERE ID = '$id'";
            
                            $update_pass_query = mysqli_query($db_connect, $update_pass);
                            
                            echo "Password Changed";
                            header('location: profile.php');
                        }
                        else{
                            echo "your password does not meet security requirements";
                        }
                    }
                    else{
                        echo "Password Dose Not Match";
                    }
            
                }
                else{
                    echo 'Password does Not match';
                }
            }

        }
}



?>