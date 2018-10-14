<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    
    .lal{

     color: red;

    }
    
    
    </style>


</head>
<body>

<?php
   if(isset($_POST['button1'])){

               $u_name=$_POST['u_name'];
               $u_mail=$_POST['u_mail'];
               $u_pass=$_POST['u_pass'];
                 
              $valid=1;
              $msg="";

          if(empty($u_name)){
             
            $valid=0;
            $msg.="Name is not valid<br>";
               
          }

          if(empty($u_mail)){
             
            $valid=0;
            $msg.="Email is not valid<br>";
               
          }

          if(empty($u_pass)){
             
            $valid=0;
            $msg.="Password is not valid<br>";

           }

           if($valid==1){

            echo "Success";
           }


          else{
            echo "<div class='lal'>$msg</div>";
    
              }

   }

  

?>

<form action="" method="post">

<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="u_name"></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="u_mail"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="u_pass"></td>
    </tr>
     <tr>
        
        <td><input type="Submit" value="send" name="button1"></td>
     </tr>


</table>



</form>
    
</body>
</html>