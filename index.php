<?php 

$name = "This is Myanmar Links. I'm from Myanmar Links. I said \"I'm Myanmar Links' Students \". How old are you?";


echo strlen($name);

echo "<br />";


$num = substr_count(strtoupper($name), "M");

echo $num;

echo "<br />";

$estring = explode(".", $name);

var_dump($estring);


$name2 = str_replace("Myanmar", "Beer", $name);

echo $name2;



/*
How many total characters - strlen

Split with fullstop - explode
How to replace - solved

How many count of phrase - substr_count
How many specific character - solved ^

*/


?>