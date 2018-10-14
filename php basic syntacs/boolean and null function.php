<?php

$a = true;
$b = false;
$c = TRUE;
$d = FALSE;

echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";

$m = 10;
$n = 50;
$o = 0;





unset ($o);

echo empty($o);

echo"<br>"."<br>";
// TYPE CASTING IN PHP

$l = true;

echo gettype($l);


echo"<br>"."<br>";
echo "Is the variabe in boolean: ".is_bool($l);

// PHP Constant variable 
echo"<br>"."<br>";

define("pi",3.1416);

echo pi;
?>

<?php

// Assinment operntation that means assin any value any particular variable

echo"<br>"."<br>";


// addintation
$a = 20;
$b = 30;

//$a +=$b;

//echo $a;

echo"<br>"."<br>";

// minus

$a -=$b; 

echo $a; 

$a = 20;

++$a;

echo $a;

echo"<br>"."<br>";
$x = 50;
$y = "50";


/// means checking with datatype
===
!==
echo ($x!==$y);



?>