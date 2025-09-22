<?php

$num = -5;
if($num < 0){
    echo "$num is less than 0";
}

echo "<br>";

$age = 15;
if(($age > 12) && ($age < 20)){
    echo "$age You are a teenager";
}

echo "<br>";

if($age < 20){
    echo "You are under 18";
}
else{
    echo "You are a adult";
}

echo "<br>";

if($num < 0){
    echo "The value of $num is a negative.";
}
else if($num == 0){
    echo "The value of $num is a 0.";
}
else{
    echo "The value of $num is a pozitive";

}

echo "<br>";

$a = 50;
$b = 10;

if($a == $b){
    echo "true";
}
else if($a > $b){
    echo "$a is bigger than $b";
}
else{
    echo "false";
}

?>