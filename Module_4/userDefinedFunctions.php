<?php

function helloWorld(){
    echo "Hello World";
}
helloWorld();

echo "<br>";

#example2



function sum(){
    $value = 120 + 20;
    echo $value;
}
sum();


echo "<br>";

#example3

function maximum($x , $y){
    if ($x > $y){
        return $x;
    }
    else{
        return $y;
    }
 }

    $a = 20;
    $b = 30;

    $test = maximum($a , $b);
         echo "The max $a and $b is $test" ;
   
    



?>