<?php


/// use of : and endif; funcion in php (little bit different from normal if else) 
$age = 9;

if($age<18):

    echo "You are teen";


elseif($age==18):

    echo "you are smart";


else:

   echo"You are adult";

endif;

echo "<br>"."<br>";

?>


<?php

$x = 5;
$y = 10;
$z = 14;

if(($x>$y)and($x>$z)){


    echo "First number is big";
}

elseif(($y>$x)and($y>$z)) {

    echo "Second number is big";
    
}


else

   echo "Third number is big";
 

?>

<?php


/// Nested ifelse practice


$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;

if(($num1>$num2)&&($num1>$num3)){

    if(($num1>$num4)&&($num1>$num5)){

          echo "Number one is maximum";

    }
}

elseif(($num2>$num1)&&($num2>$num3)){

 if($num2>$num4){

    echo "Number 2 is mixamum";

}
}

elseif(($num3>$num1)&&($num3>$num2))
{

    if($num3>$num4){
   
       echo "Number 3 is mixamum";

    }
}


else

echo "Number 4 is maximum";



?>