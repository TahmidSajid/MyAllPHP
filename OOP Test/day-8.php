<?php


// class first{
//     private $fname , $lname;

//     private function setName($x,$y){
//         $this->fname = $x;
//         $this->lname = $y;
//     } 

//     function __call($methds, $args){
//         call_user_func_array([$this,$methds],$args);
//     }
// }

// $abc = new first();

// $abc->setName("tahmid","sajid");

// print_r($abc);



// class second{
//     public static $name;

//     private static function setName($x){
//         self::$name = $x;
//     }

//     static function __callStatic($x, $args)
//     {
//         call_user_func_array([__CLASS__,$x],$args);
//     }
// }
// second::setName("tahmid");

// echo second::$name;



// class third{
//     private $fname, $lname;

//     function setName($x,$y){
//         $this->fname = $x;
//         $this->lname = $y;
//     }

//     function __isset($x){
//        echo isset($this->$x);
//     }
// }

// $abc = new third();

// $abc->setName("tahmid","sajid");

// echo isset($abc->cname);





// class fourth {
//     private $details = ["name"=>"sajid","age"=>20];

//     function __isset($x){
//         echo isset($this->details[$x]);
//     }
// }

// $abc = new fourth();

// echo isset($abc->tanim)

?>