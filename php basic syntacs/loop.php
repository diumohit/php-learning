<?php

// Foreach loop

$abc = array(10,20,30,40,50,60);

foreach($abc as $bc){

  //echo " "."$bc";

}

foreach($abc as $key => $value){

  echo $key." ".":"."$value"."<br>";


}

$aa = array("apple" => "phone","mango" =>"juice","mac" =>"pc" );

// value parameter gives the value and key parameter provides the index number of the array 
foreach($aa as $key => $value){
 echo  $key." ".":"."$value"."<br>";

}

?>