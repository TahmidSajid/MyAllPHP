<?php


// class hello{

//     private $name;

//     function hello (){
//         echo "hello I am ".$this->name;
//     }
//     public function __get($x){
//         echo "you are trying to access a private propertie ".$x;
//     }

// }

// $x = new hello();

// $x->name;




// class getSomethings{

//     private $details = ['name'=>'sajid','class'=>'XII','roll'=>23];

//     function __get($x){

//     if(array_key_exists($x,$this->details)){
//         echo $this->details[$x];
//     }
//     else{
//         echo "the element doesn't exist";
//     }

//     }
// }
// $y = new getSomethings();
// $y->name;



// class assigning {
//     private $name;
//     function __set($x,$y){
//         if(property_exists($this,$x)){
//             $this->$x=$y;
//         }
//         else{
//             echo "this dosen't exists";
//         }
//     }
//     function show(){
//         echo $this->name;
//     }
// }

// $abc = new assigning();

// $abc->code="sajid";

// $abc->show();


?>