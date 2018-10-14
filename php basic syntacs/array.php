<?php

$a = array(20,3.14,"mordern");

echo $a[2];
echo "<br>"."<br>";


echo "<pre>";
print_r ($a);

echo "</pre>";


$b = array(15,45,90);

$c = $b[0]+$b[1]+$b[2];

echo "<br>"."<br>";
echo $b[0]+$b[1]+$b[2];

// Two dimentional array in php
echo "<br>"."<br>";
$x = array(101,array("mango","apple","lichi") ,"jango");

echo $x[1][2];


// Different Style
echo "<br>"."<br>";
$y = array("first_name" => "Antar","second_name"=>"Mohit","third_name"=>"30");

echo ($y["first_name"].$y["second_name"].$y["third_name"]);
echo "<pre>";
print_r ($y);
echo "</pre>";


// Count function in array
echo "<br>"."<br>";
$a = array("amrrica",25,"bangladesh",23,"canada",30);

echo count($a);

echo "<br>"."<br>";

echo count(array("amrrica",25,"bangladesh",23,"canada",30));


// searching in array (only returns 1 if get out put )
echo "<br>"."<br>";

echo in_array("canada",$a);

// Find maximum value

echo "<br>"."<br>";

echo max($a);

// Finding minimum value
echo "<br>"."<br>";

echo min($a);

// Sorting Function

echo "<br>"."<br>";

$a2 = array(5,10,20,15,3);
sort($a2);

echo "<pre>";
print_r ($a2);

echo "</pre>";

// Reverse sorting function

echo "<br>"."<br>";
rsort($a2);
echo "<pre>";
print_r ($a2);

echo "</pre>";

// Array unique
echo "<br>"."<br>";
$a = array(12,12,15,20,20,48,50);
echo "<pre>";
print_r (array_unique($a));
echo"</pre>";






?>