<?php

$data_connect = mysqli_connect('localhost','root','','newusers');
$port_id=$_POST['id'];
$port_type=$_POST['type']; 
$port_name=$_POST['name'];
$port_heading=$_POST['port_heading'];
$port_des=$_POST['port_des'];
$photo = $_FILES['port_photo']['full_path'];
$photo_extention = explode('.',$photo)['1'];
$photo_new_name = date("d_m_y_this").".".$photo_extention;
$new_location = 'D:\xampp\htdocs\Class HW 17\components\portfolio-images/'.$photo_new_name;
$old_location = $_FILES['port_photo']['tmp_name'];
move_uploaded_file($old_location,$new_location);
$update_query = "UPDATE portfolio SET type='$port_type',name='$port_name',port_photo='$photo_new_name',port_heading='$port_heading',port_des='$port_des' WHERE id='$port_id'";
mysqli_query($data_connect,$update_query);
header('location: ../portfolio.php');

?>