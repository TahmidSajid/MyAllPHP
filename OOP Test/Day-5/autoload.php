<?php

function __autoload($class){
    require $class."php";
}


$x = new first();

?>