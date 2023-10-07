<?php


// **** magic method __clone() *** 


// $a = 10;

// $b =& $a;

// $b = 5;

// echo $a;


// class student {

//     public $name;
//     public $course;

//     public function __construct($x){
//         $this->name = $x; 
//     }
// }


// $student1 = new student ("sajid");
// $student1->course = "Web-dev"; 
// $student2 = $student1;

// $student2 = new student ("tanim");
// $student2->course = "PGD"; 

// print_r($student1);
// print_r($student2);

// echo $student1->name;





// *** magic method __invoke() ***


class calculation {

    public $a;
    public $b;
    public $c;

    public function __construct($x,$y){
        $this->a = $x;
        $this->b = $y;
    }

    public function __invoke(){
        echo $this->c = $this->a + $this->b; 
    }
}


$abc = new calculation(30,20);

$abc();



?>