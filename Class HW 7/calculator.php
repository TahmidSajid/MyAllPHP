<?php
$one = $_POST["number-one"];
$two = $_POST["number-two"];

if(isset($_POST["add"])){
    if($one && $two){
        echo $one+$two;    
    }
    else{
        echo "value dite hobe";
    }
}
if(isset($_POST["sub"])){
    if($one && $two){
        echo $one-$two;    
    }
    else{
        echo "value dite hobe";
    }
}
if(isset($_POST["mul"])){
    if($one && $two){
        echo $one*$two;    
    }
    else{
        echo "value dite hobe";
    }
}
if(isset($_POST["div"])){
    if($one && $two){
        echo $one/$two;    
    }
    else{
        echo "value dite hobe";
    }
}

?>