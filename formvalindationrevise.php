<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <style>
    
    .error{


         color:red;
    }
    </style>

</head>
<body>


<?php

   if(isset($_POST['form1'])){

       $u_name=$_POST['u_name'];
       $u_age=$_POST['u_age'];
       $u_mail=$_POST['u_mail'];
       $u_password=$_POST['u_password'];

       if(empty($u_name)){

        echo "<div class='error'>User name can not be empty</div><br>";
       }

    
       if(empty($u_age)){

         echo "<div class='error'>Age can not be empty</div><br>";
         
       }

       
       if(empty($u_mail)){

        echo "<div class='error'>E-mail address can not be empty</div><br>";
        
      }

      if(!(preg_match('/[^a-zA-Z0-9]+@([a-z])/', $u_mail))){

           echo "<div class='error'>Enter Valid email</div><br>";

      }

      if(empty($u_password)){

        echo "<div class='error'>Password can not be empty</div><br>";
        
      }
    
  ?>

<form action="" method="post">

<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="u_name"></td>

       
    </tr>
    <tr>
        <td>Age:</td>
        <td><input type="text" name="u_age"></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type="text" name="u_mail"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="u_password"></td>
    </tr>

    <tr>
        <td><input type="submit" value="Send" name="form1"></td>    
    </tr>

</table>
    
</form>


</body>

 </html>