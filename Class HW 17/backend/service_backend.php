<?php

$service_name = $_POST['service_name'];
$service_description = $_POST['service_des'];
$service_icon = $_POST['icon'];
$service_status = $_POST['status'];
$service_old_name = $_POST['pre_service_name'];



if(isset($_POST['name_change'])&& $service_name){
    $data_connect = mysqli_connect('localhost','root','','newusers');
    $data_insert = "INSERT INTO services (service_name,service_des,icon,status) VALUES ('$service_name','$service_description','$service_icon','$service_status');";
    $insert_query = mysqli_query($data_connect,$data_insert);
    header('location: ../service.php');
}
if(isset($_POST['update_change'])&& isset($_POST['pre_service_name'])){
    $data_connect = mysqli_connect('localhost','root','','newusers');
    $data_update = "UPDATE services SET service_name='$service_name',service_des='$service_description',icon='$service_icon',status='$service_status' WHERE service_name='$service_old_name';";
    $insert_query = mysqli_query($data_connect,$data_update);
    header('location: ../service.php');
}

?>