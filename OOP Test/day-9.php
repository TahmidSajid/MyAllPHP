<?php


// class first {

//     public $class = "XII";
//     private $fname = "tahmid";
//     private $lname = "sajid";


//     function __unset($x){
//         unset($this->$x);
//     }
// }

// $abc = new first();

// // echo $abc->class;

// unset($abc->lname);

// print_r($abc);



// class second {

//     function __toString()
//     {
//         return "u are trying to print a object as a string : ".get_class($this);
//     }


// }

// $abc = new second();

// echo $abc;






class third {

    public $fname,$lname,$age;

    function setSome($a,$b,$c){
        $this->fname = $a;
        $this->lname = $b;
        $this->age = $c;
    }

    function __sleep()
    {
        return array('fname','lname');
    }

    function __wakeup()
    {
        echo "hello weakup man ";
    }
}

$abc = new third();

$abc->setSome("tahmid","sajid",22);

$ser = serialize($abc);

$unser = unserialize($ser);
?>