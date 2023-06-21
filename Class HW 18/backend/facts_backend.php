<?php

$fact_name = $_POST['facts_name'];
$count = $_POST['count'];
$icon = $_POST['icon'];

$data_connent = mysqli_connect('localhost','root','','newusers');
$insert_query = "INSERT INTO facts (facts_name,count,icon) VALUES ('$fact_name','$count','$icon');";
mysqli_query($data_connent,$insert_query);
header("location:../facts.php")

?>