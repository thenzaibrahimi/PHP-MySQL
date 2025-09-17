<?php

$school = 'Digital School';
echo  "I love $school<br>";

$x=120;
$y=50;
echo $x + $y; echo  "<br>";
echo $x - $y; echo  "<br>";
echo $x * $y; echo  "<br>";
echo $x / $y; echo  "<br>";
echo $x % $y; echo  "<br>";

$a = "Digital";
$b = "School";
$c = $a.$b ;
echo "$c \n";

$the_string = "Digital School"; echo  "<br>";
echo strlen($the_string); echo  "<br>";

echo str_word_count($the_string);

$programming = "Programming is not cool"; echo  "<br>";
echo str_replace("not", "very", $programming); echo  "<br>";

$the_string = "Programminmg"; echo  "<br>";
echo strrev($the_string); echo  "<br>";
?>