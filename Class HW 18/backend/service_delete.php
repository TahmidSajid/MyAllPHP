<?php
$id = $_GET['id'];
$data_connect = mysqli_connect('localhost','root','','newusers');
$delete_query = "DELETE FROM services where id='$id';";
mysqli_query($data_connect,$delete_query);
header('location: ../service.php')
?>