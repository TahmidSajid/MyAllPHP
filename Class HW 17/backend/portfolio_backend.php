<?php
$data_connect = mysqli_connect('localhost','root','','newusers');
$type = $_POST['type'];
$name = $_POST['name'];
$portfolio_heading = $_POST['portfolio_heading'];
$portfolio_des = $_POST['portfolio_des'];
$photo = $_FILES['photo_name']['full_path'];
$photo_extention = explode('.',$photo)['1'];
$photo_new_name = date("d_m_y_his").".".$photo_extention;
$new_location = 'D:\xampp\htdocs\Class HW 17\components\portfolio-images/'.$photo_new_name;
$old_location = $_FILES['photo_name']['tmp_name'];
move_uploaded_file($old_location,$new_location);

$insert_query = "INSERT INTO portfolio (type,name,port_photo,port_heading,port_des) VALUES ('$type','$name','$photo_new_name','$portfolio_heading','$portfolio_des');";

mysqli_query($data_connect,$insert_query);
header('location: ../portfolio.php');

?>