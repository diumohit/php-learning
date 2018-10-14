<?php

$str1 = "Ashia Cup";
$str2 = "2018";
$str3 = "Final match";

echo "$str1"." "."$str2"." "."$str3";


echo "<br>"."<br>";


$str2 .= $str3;

echo "$str2"." "."$str1";


$str5 = "Artificial intelligence";

?>
<br><br>
<b>Make all letter in uppercase:</b>
<?php echo strtoupper($str5);?>
<br><br>
<b>Make all letter in lowercase:</b>
<?php echo strtolower($str5);?>

<br><br>
<b>Make make first letter  of the word Upper:</b>
<?php echo ucfirst($str5);?>

<br><br>
<b>Make make first letter  of the word Upper:</b>
<?php echo ucwords($str5);?>

<br><br>
<b>Make make first letter  of the word lower:</b>
<?php echo lcfirst($str5);?>
<br><br>


<?php

//get length of the string

echo "Length of the string \$str5 is:<br>";

echo strlen($str5);
?>

<br><br>
<?php

$a = "We are now live in Digital bangladesh ";
$b = "in asia ";

$c = trim($a);
echo $c;

echo "<br><br>";

//  Finding FROM String


echo strstr($a,"live");

//replace a word in the string

echo "<br><br>";
echo str_replace("bangladesh","World",$a);

echo "<br><br>";

echo strpos();

// Find in substring inside a string

echo "<br><br>";

echo substr($a,11,16);

echo "<br><br>";

echo strpos($a ,"live" );

echo "<br><br>";

//Floating Point

$i=3.1416;

echo "Round Function:".round($i,1);

echo "<br><br>";
echo "Ceil Function:".ceil($i);

echo "<br><br>";

echo "Floor Function".floor($i);

echo "<br><br>";
// square Function

echo "square Function: ".sqrt(9);

// Random Funtion
echo "<br><br>";
echo "Random Function: ".rand(20,100);

// Power 

echo "<br><br>";
echo "Power Function: ".pow(2,3);

?>


// Array in PHP



<?php
echo "<br><br>";
$a = array(10,20,30);
print_r ($a);






?>
