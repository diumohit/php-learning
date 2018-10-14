<?php

$r=1.282896;

echo"$r";
echo "<br>";
echo "<br>";

//Round Funtion

echo"Round  ".round($r,3);
echo "<br>";
echo "<br>";

//Ceil Function

echo "Ceil Function".ceil($r);

// Divition

$a=5;
$b=2;
echo "<br>";
echo"Result".$a/$b;

/// Floor Fuction

echo "<br>";
echo "<br>";
$f=3.60896;
echo"Floor Fucntion  ".floor($f);

//Square Funtion

$s=49;
echo "<br>";
echo "<br>";
echo"Square root of a value  ".sqrt("$s");

//Power Function

echo "<br>";
echo "<br>";
echo"Power Funton  ".pow(4,3);
// Power Using varible 

echo "<br>";
echo "<br>";
$m=5;
$l=3;
echo"Power Using varible  ".pow($m,$l);


//Random Funtion

echo "<br>";
echo "<br>";
echo"Random Funtion  ".rand(); //32***

/// Random Funtion With Fixed Length

echo "<br>";
echo "<br>";
echo"Random Funton between 20 to 100 :  ".rand(20,100); ///Between 20 to 1000

//mt_random Funtion

echo "<br>";
echo "<br>";
echo"mt random Funtion  ".mt_rand();

//mt_random Funtion with Fixed length

echo "<br>";
echo "<br>";
echo"mt random Funtion  ".mt_rand(20,999);














?>




