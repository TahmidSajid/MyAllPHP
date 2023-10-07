<?php
// **** get_class() ****

// namespace sajid;
// class abc{
//     public $name;
//     public function __construct(){
//         $this->name = get_class($this);
//     }
// }

// $x = new abc();
// echo $x->name;
// echo get_class($x);


// **** get_parent_class() ****


// class abc{
//     public $name;
// }
// class xyz extends abc{
//     function getParentName(){
//         $this->name = get_parent_class($this);
//     }
// }
// $x = new xyz();
// $x->getParentName();
// echo $x->name;

// echo get_parent_class($x);


// **** get_class_methods() ****


// class abc{
//     public $f_names;

//     public function __construct()
//     {
//         $this->f_names = get_class_methods($this);
//     }
//     public function getName(){

//     }
//     private function setName(){

//     }
//     protected function printName(){

//     }
// }


// $x = new abc ();
// print_r($x->f_names);
// echo "<br>";
// print_r(get_class_methods($x))


// **** get_class_vars() ****

// class details {
//     public $name = "sajid";
//     public $class = "XII";
//     public $shift = "Day";
//     private $number = "01799863305";
//     private $roll = "29";
//     public $details ;
//     public function __construct()
//     {
//         $this->name = "tahmid";
//         $this->details = get_class_vars(__CLASS__);   
//     }
// }
// $x = new details();

// print_r($x->details);
// print_r(get_class_vars('details'));


// **** get_object_vars() ****


// class abc {
//     public $name = "sajid";
//     public $class = "XII";
//     public $shift = "Day";
//     private $number = "01799863305";
//     protected $roll = "29";
//     public function __construct(){
//         $this->name = "tahmid";
//         // print_r(get_object_vars($this)); 
//     }
// }
// $x = new abc();

// print_r(get_object_vars($x));


// **** get_called_class() ****


// class abc {
//     public static function getName(){
//         echo get_called_class();
//     }  
// }
// class xyz extends abc{}
// abc::getName();
// xyz::getName();


// *** get_declared_classes ***


class abc {

}

class xyz {

}

print_r(get_declared_classes());


//  **** get_declared_interface ****


// interface abc{}
// interface xyz{}
// interface pqr{}

// print_r(get_declared_interfaces());


// **** get_declared_traits ****


// trait abc{}
// trait xyz{}
// trait pqr{}
// print_r(get_declared_traits());


// **** class_alias ****


// class abc{
//     public $name =__CLASS__;

//     public function printName(){
//         echo $this->name;
//     }
// }
// class_alias("abc","mc");
// $y = new abc();
// $x = new mc();

// $y->printName();
?>