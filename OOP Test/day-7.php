<?php
// class first{
//     private $name;

//     private function show($x){
//         $this->name=$x;
//     }

//     public function __call($x,$arguments)
//     {
//         echo "trying to access a private or non-existing".$x;
//     }
// }

// $abc = new first();

// $abc->show();




// class secnd{

//     private $fname , $lname;

//     private function getName($x,$y){
//         $this->fname = $x;
//         $this->lname = $y;
//     }

//     function __call($fun, $arguments)
//     {
//         if(method_exists($this,$fun)){
//             call_user_func_array([$this,$fun],$arguments);
//         }
//         else{
//             echo "methods dosen't exists";
//         }

//     }
//     function show(){
//         echo $this->fname."<br>";
//         echo $this->lname."<br>";
//     }
// }

// $x = new secnd();

// $x->getName("tahmid","sajid");

// $x->show();

?>