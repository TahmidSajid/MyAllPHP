<?php


class cal {
    public $a,$b;
    function __construct($x,$y)
    {
        $this->a = $x;
        $this->b = $y;
    }

    function sum(){
        echo "sum is here".$this->a+$this->b."<br>";
    }

    function __destruct(){
        echo "complete";
    }
}

$x = new cal(20,30);

$x->sum();



?>