<?php
//set the name of the file
$orges = "ds2.txt";

//open the file for reading
$amar = fopen($orges, "r");

//get the size of the file

$gjin = filesize($orges);

//save the content in a var
$stina= fread($amar, $gjin);

echo $stina;
?>