<?php

if(isset($_REQUEST["s_name"]) && isset($_REQUEST["s_age"])){

$nam=$_REQUEST["s_name"];
$boyos=$_REQUEST["s_age"];

echo"$nam";
echo"<br>";
echo"$boyos";

header('location:Get_Post_Request method.php?message=True');

}

else{

   echo"No value found";
   header('location:Get_Post_Request method.php?message=False');

}






?>