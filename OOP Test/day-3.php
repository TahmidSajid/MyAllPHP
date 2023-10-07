<?php
// *** int hinting



// class calcu{
//     function sum(int $v){
//         echo $v+10;
//     } 
// }

// $calculation = new calcu();
// $calculation->sum("sajid");
// $calculation->sum(30);

// ** array hinting


// class printing {
//     function arr(array $names){
//         foreach($names as $x){
//             echo $x."<br>";
//         }
//     }
// }

// $fruits = ["mango","apple","banana","jackfruit"];
// // $fruits = "mango";

// $prt = new printing();
// $prt-> arr($fruits);



// ***function hinting



// class everyTime {
//     function every (){
//         echo "this is every thing";
//     }
// };

// class someTime {
//     function some (){
//         echo "this is some thing";
//     }
// };

// class printing{
//     function prnt(everyTime $f){
//         $f->every();
//     }
// }

// $x = new everyTime();
// $t = new printing();
// $t->prnt($x)






// *** mixing hinting

// class allPrinting {
//     function getArry(details $x){
//         foreach($x->arr() as $name){
//             echo $name."<br>";
//         }
//     }
// }

// class details {
//     function arr() {
//         return ["tanim","morshed","ripon"];
//     }
// }

// class libra{

// }

// $test = new libra();

// $students = new details();

// $prnt = new allPrinting();
// $prnt->getArry($students)


?>