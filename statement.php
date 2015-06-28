<?php 

$name1 = "Soe Thiha Naung";
$name2 = "Aung Thiha";

/*
Concate
Pick out Common Word
Compare
	- which one more characters
*/

// Pick out common word

$ename1 = explode(' ', $name1);
$ename2 = explode(' ', $name2);


$result = array_intersect($ename1, $ename2);


// to find word count without space


var_dump(strlen(str_replace(" ", "", $name1)));
var_dump(strlen(str_replace(" ", "", $name2)));



$num1 = 56;
$num2 = 67;

/*
Sum up
find out greatest num
Concate
*/




 ?>