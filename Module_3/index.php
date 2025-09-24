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

echo "<br>";

$age = 15;
switch($age){
    case($age >=0 && $age < 18):
        echo "You are a minor(0-18) <br>";
        break;
    case($age >= 18 && $age <= 25):
        echo"You are a young adult <br>";
        break;
    case($age >25):
        echo "You are an adult <br>";
        default:
        echo "Ivalid age input <br>";
        break; 
}

$day = "Monday";
switch ($day){
    case 'Monday':
        echo "It's Monday";
        break;

         case 'Tuesday':
        echo "It's Tuesday";
        break;

         case 'Wednesday':
        echo "It's Wednesday";
        break;

         case 'Thursday':
        echo "It's Thursday";
        break;

         case 'Friday':
        echo "It's Friday";
        break;

         case 'Saturday':
        echo "It's Saturday";
        break;

         case 'Sunday':
        echo "It's Sunday";
        break;

        default:
        echo "Ivalid date";
        break;
        
}

echo "<br>";


$x = 1;

while($x <= 5){
    echo "The number is: $x <br>";
    $x++;
}

echo "<br>";

$y = 1;
do{
    echo "The number is: $y <br>";
     $y++;
}while($y <= 5)

?>