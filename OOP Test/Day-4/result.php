<?php

require_once("product.php");
require_once("test.php");
require_once("long.php");

use long\v1\test as long ;


$x = new first\product();
$y = new second\product();
$z = new long\product();
$p = new third\product;


$x->test();
$y->test();
$z->test();
$p->test();


first\hi();
second\wow();
third\wow();
?>