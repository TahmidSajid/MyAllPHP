<?php

// class naming {

//     static $name;

//     static function giveName($n) {
//         self::$name=$n;
//     }

//     static function show(){
//         echo "this name is : ".self::$name;
//     }

// }
// class nameshow extends naming{
//     function get(){
//         echo "this name is : ".parent::$name;
//     }
// }

// $newSome = new nameshow();

// $newSome::$name = "tanim";

// $newSome->get()



// class naming {
//     static $name="sajid";

//     function show(){
//         echo "this name is ".static::$name;
//     }
// };

// class derived extends naming {
//     static $name = "tanim";
// }

// $newsome = new derived();

// $newsome->show();

// trait message_1{
//     function message(){
//         echo "hello from m1";
//     }
// }

// class message_2{
//     function message(){
//         echo "hello from m2";
//     }
// }


// class print_all extends message_2 {
//     use message_1;
//     function message()
//     {
//         echo "hello from pr1";
//     }
// }

// $printSome = new print_all();
// $printSome->message();


trait messageone {
    function mess1(){
        echo "this is mess1";
    }
}

trait messagetwo{
    function mess1(){
        echo "this is mess2";
    }
}
class print_1{
    use messageone,messagetwo{
        messageone::mess1 insteadOf messagetwo;
        messagetwo::mess1 as mess2;
    }
}

$newone = new print_1();

$newone->mess1();
$newone->mess2();
?>