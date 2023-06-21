<?php
$email = $_POST['email'];
$data_connect = mysqli_connect('localhost', 'root', '', 'newusers');
$delete_query = "DELETE FROM users WHERE email='$email';";
$delete_final = mysqli_query($data_connect,$delete_query);
header('location: users.php');
?>