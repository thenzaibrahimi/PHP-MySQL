<?php

/*$x = 5;

function localvariable(){
    $y = 10;
    echo $y;
}
localvariable();
echo "\n, $x" ;

"<br>"
*/

$x = 5;
$y = 7;
function sum(){
    global  $x, $y;
    $y = $x + $y;
}
sum();
echo $y;


?>