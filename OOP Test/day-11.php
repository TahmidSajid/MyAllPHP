<?php
// *** PHP magic constants ***

// *** __LINE__ ***

// echo "this is line: ".__LINE__;


// *** __FILE__ ***

// echo "this file location is: ".__FILE__;


// *** __DIR__ ***

// echo "this file is from: ".__DIR__;


//  *** __FUNCTION__ **

// function getName(){
//     echo "this function is name: ".__FUNCTION__;
// }
// getName();


// *** __CLASS__ **

// class abc {
//     public $name = __CLASS__;
//     public function __construct()
//     {
//         echo 'this function name is: '. $this->name;
//     }
// }
// $x = new abc();


// *** __METHOD__ ***

// class abc{  
//     public $methodName ;
//     public function getClassName(){
//     $this->methodName =  __METHOD__;
//     }
//     public function printMethodName(){
//         echo $this->methodName;
//     }
// }
// $x = new abc();
// $x->getClassName();
// $x->printMethodName();


// *** __NAMESPACE__ ***

// namespace Myspace;
// class abc {
//     public $Namespace = __NAMESPACE__;
//     public function print(){
//         echo "this name space name is :".$this->Namespace;
//     }
// }
// $x = new abc();
// $x->print();


// *** __TRAIT__ ***

trait Traitusing{
    public function getTraitName(){
        echo "this trait name is :".__TRAIT__;
    }
}

class abc{
    use Traitusing;
}

$x = new abc();
$x->getTraitName();
?>