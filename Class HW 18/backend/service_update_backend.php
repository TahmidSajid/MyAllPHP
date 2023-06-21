<?php

$service_name = $_POST['service_name'];
$service_description = $_POST['service_des'];
$service_icon = $_POST['icon'];
$service_status = $_POST['status'];
$service_id = $_POST['id'];

if(isset($_POST['update_change'])){
    $data_connect = mysqli_connect('localhost','root','','newusers');
    $data_update = "UPDATE services SET service_name='$service_name',service_des='$service_description',icon='$service_icon',status='$service_status' WHERE id='$service_id';";
    $insert_query = mysqli_query($data_connect,$data_update);
    header('location: ../service.php');
}

?>