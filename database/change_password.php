<?php

ob_start();

session_start();

if($_SESSION['name']!='kissuparina'){


    header('location:login.php');
}


?>


<?php
 
 include('config.php');
  
 if(isset($_POST['password_submit'])){

 try{

  if(empty($_POST['old_password'])){

      throw new Exception('Old password field can not be empty');
  }


  if(empty($_POST['new_password'])){

      throw new Exception('New password field  can not be empty');
  }

  if(empty($_POST['con_new_password'])){

      throw new Exception('Confirm new password field can not be empty');
  }

  //Checking old password


  $old_password=$_POST['old_password'];
  $old_password = md5($old_password);



  $num=0;
  $result = mysql_query("select * from tbl_login where pass_word = '$old_password'");
  $num = mysql_num_rows($result);

  if($num==0){

    throw new Exception('Old password does not match');
  }

  if($_POST['new_password'] !=$_POST['con_new_password']){

         throw new Exception('Passwords does not match');
  }

 $new_password=$_POST['new_password'];
 $new_password=md5($new_password);


 $result = mysql_query("update  tbl_login set pass_word='$new_password' where id=1");

  $success_message = 'Password changed  succesfully';



 }

 catch(Exception $e){

  $error_message = $e->getmessage();

 }

 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password </title>
</head>
<body>

<h2>Change Password</h2>

<?php

 if(isset($error_message)){ echo $error_message;}
 if(isset($success_message)){ echo $success_message;}

 ?>

<br>

<form action="" method="post">
<table>
    <tr>
        <td>Old password</td>
        <td><input type="text" name="old_password"></td>
    </tr>
    <tr>
        <td>New Password</td>
        <td><input type="text" name="new_password"></td>
    </tr>
    <tr>
        <td>Confirm new Password</td>
        <td><input type="text" name="con_new_password"></td>
    </tr>
        
    <td><br><input type="submit" value="SUBMIT" name="password_submit"></td>
    </tr>
</table>

<br><a href="index.php">Go to previous page</a>

</form>

    
</body>
</html>