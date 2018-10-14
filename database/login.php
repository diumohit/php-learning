
<?php

if(isset($_POST['form_login'])){

    try{

       if(empty($_POST['user_name'])){

        throw new Exception('User Name can not be empty');
       }
       if(empty($_POST['pass_word'])){

        throw new Exception('Password can not be empty');
       }

       $password = $_POST['pass_word']; // admin
       $password = md5($password);

        include('config.php');

        $num = 0;
       $result = mysql_query("select * from tbl_login where user_name='$_POST[user_name]' and pass_word='$password'");
      $num = mysql_num_rows($result);
       if($num){

         session_start();
         $_SESSION['name'] = "kissuparina";
         header('location:index.php');

      }
      else{
 
          throw new Exception('Invalid Username or Password or both.');
          
      }

    }
    catch(Exception $e){


        $Error_message = $e->getmessage();
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Databae connection</title>
</head>
<body>
    
    <h2>Login Page</h2>

 <?php

 if(isset($Error_message)){

    echo $Error_message;
 }
 
 ?>


<form action="" method="post">
 <table>
     <tr>
         <td>User Name</td>
         <td><input type="text" name="user_name" ></td>
     </tr>
     <tr>
         <td>Password</td>
         <td><input type="password" name="pass_word" ></td>
     </tr>
     <tr>
         
         <td><input type="submit"  value="Login"  name="form_login"></td>
     </tr>
 </table>

</form>


</body>
</html>