<?php
$data_connect = mysqli_connect('localhost','root','','newusers');

$file = 'icon.json';

$data = file_get_contents($file);

$data_read = json_decode($data,true);

$array = $data_read['icons'];

foreach ($array as $value) {
    $insert_query = "INSERT INTO icons (icon) VALUES ('$value');";
    mysqli_query($data_connect,$insert_query);
}
?>