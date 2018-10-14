<?php


//1+3+5+7+9+11+13+.....+99
// getting even Numbers by loop


$i=0;$sum=0;

for($i=1;$i<=10;$i++){

   
  $sum = $sum+$i;

}

 echo $sum;


 echo "<br>"."<br>";
/// showing 100 odd numbers using loop

$count=0;

for($i=0;;$i++){

    if($i%2 !=0){
        echo "<br>"." ".$i; 
    
        $count++;

        if($count==20){
            break;
        }
    }
}






?>