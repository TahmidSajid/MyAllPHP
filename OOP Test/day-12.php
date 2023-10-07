<?php

// **** class_exists() ****


// class abc{

// }
// if(class_exists('abc')){
//     echo "The class does exist";
// }
// else{
//     echo "The class doesn't exist";
// }


// **** interface_exists() ****


// interface getSome{
//     function some();
// }
// if(interface_exists('getSome')){
//     class abc implements getSome{
//         function some(){
//             echo "the interface exist";
//         }
//     }
// }
// else{
//     echo "the interface doesn't exist";
// }
// $x = new abc();
// $x->some();


// **** method_exists() ****


// class abc{
//     function getName(){
//     }
// }
// if(method_exists('abc','getName')){
//     echo 'method exists';
// }
// else{
//     echo "method doesn't exist";
// }


// **** trait_exists() ****


// trait getName{
//     function name(){
//         echo 'class name is : '. __CLASS__;
//     }
// }
// if(trait_exists('getName')){
//     class abc{
//         use getName;
//     }
// }
// else{
//     echo "trait doesn't exists";
// }
// $x = new abc();
// $x->name();


// **** property_exists ****


// class abc {
//     public $name = 'sajid';
// }

// if(property_exists('abc','name')){
//     echo 'property exists in the class <br>';
//     $x = new abc();
//     echo "the name is: ".$x->name;
// }
// else{
//     echo "property doesn't exists";
// }


// **** is_a **** 


// class abc {
//     public $name = __CLASS__;
// }
// class abd {
//     public $name = __CLASS__;
// }
// $x = new abc();

// if(is_a($x,'abc')){
//     echo "the object is from: ". $x->name;
// }
// else{
//     echo "the object is not from: ";
// }


// **** is_subclass_of() ****


// class abc{
//     public $name = "sajid";
// }

// class xyz extends abc {

// }
// if(is_subclass_of('xyz','abc')){
//     echo "is a subclass <br>";
//     $s = new xyz();
//     echo $s->name;
// }
// else{
//     echo "isn't a subclass";
// }


?>