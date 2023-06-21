<?php
echo "<h4>1 to 50 even numbers</h4><br><br><br><br>";
for($i=0;$i<=50;$i=$i+2){
       echo "Number:".$i."is even<br>";

}
echo "<h4>1 to 50 odd numbers</h4><br><br><br><br>";
for($i=1;$i<=50;$i=$i+2){
    echo "Number:".$i."is odd<br>";

}




echo "<h4>string repalce</h4><br><br><br><br>";
for($i=0;$i<=100;$i++){
    if($i%2==0){
            echo "Number:".$i."is even<br>";
    }
    else{
        echo "Number:".$i."is odd<br>";
    }
}

echo "<h4>string repalce</h4>";
$des = "this contry name is x <br>";

echo str_replace("x" ,"Bangladesh" , $des);


echo "<h4>string print</h4>";

$name = "'Tahmid Sajid'";

echo $name;

?>