<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
       .red{ 
           color:red;
           }
    
    </style>


</head>
<body>


<?php
if(isset($_POST['button1'])){

    $u_name=$_POST['u_name'];
    $u_mail=$_POST['u_email'];
    $u_pass=$_POST['u_pass'];
    
    if(empty($u_name)){
        echo "<div  class='red'>Name is invalid</div>";
    }

    if(empty($u_mail)){
        echo "<div  class='red'>Email is invalid</div>";
     }
    if(empty($u_pass)){
        echo "<div  class='red'>Password is invalid</div>"; 
}

    

?>





<form action="" method="POST">

<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="u_name"></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type="text" name="u_email"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="u_pass"></td>
    </tr>

    <tr>
      <td><br></td>
      <td><input type="submit" value="Send" name="button1"></td>
    </tr>
</table>



</form>

    
</body>
</html>