<?php

// class classOne {
//     public $name;
    
//     function name($x){
//         $this->name = $x;
//     }

//     function show(){
//         echo "class one name is ". $this->name."<br>";
//     }
// }

// $first_Name = new classOne();

// $first_Name->name = "tanim";

// $first_Name->show();


// class classTwo extends classOne{
//     function get(){
//         echo "class two name is ". $this->name;
//     }
// }

// $two_class = new classTwo();
// $two_class->name = "sajid";
// $two_class->get()



abstract class Pname {
    protected $name ;

    function __construct($x){
        $this->name = $x;
    }

    abstract protected function show();

};


class Cclass extends Pname {
    public function show(){
        echo "assigned name is : ".$this->name;
    }
};

$snd_class = new Cclass("sajid");

$snd_class->show();











?>