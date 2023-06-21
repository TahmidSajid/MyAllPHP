<?php
$data_connect = mysqli_connect('localhost', 'root','','newusers');
$greeting = $_POST['greeting'];
$name = $_POST['name'];
$description = $_POST['description'];
$photo = $_FILES['photo']['full_path'];
$old_location = $_FILES['photo']['tmp_name'];
$new_location = 'D:\xampp\htdocs\Class HW 16\components\images/'.$photo;
move_uploaded_file($old_location,$new_location);
$update_query = "UPDATE banner_elements SET greeting='$greeting',name='$name',description='$description',photo='$photo';";
mysqli_query($data_connect,$update_query);


?>