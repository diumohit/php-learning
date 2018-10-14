<?php

ob_start();

session_start();

if($_SESSION['name']!='kissuparina'){


    header('location:login.php');
}


?>



<?php
 
 include('config.php');

 if(isset($_REQUEST['id'])){

    $id=$_REQUEST['id'];
 }

 else{

    header('location:view.php');
 }

 
  
 if(isset($_POST['form1'])){

 try{

  if(empty($_POST['st_name'])){

      throw new Exception('Name can not be empty');
  }


  if(empty($_POST['st_roll'])){

      throw new Exception('Roll can not be empty');
  }

  if(empty($_POST['st_age'])){

      throw new Exception('Age can not be empty');
  }

  if(empty($_POST['st_mail'])){

      throw new Exception('E-mail can not be empty');
  }

 // $result = mysql_query("insert into tbl_std(st_name,st_roll,st_age,st_mail) values('$_POST[st_name]','$_POST[st_roll]',

  //'$_POST[st_age]','$_POST[st_mail]') ");

    $result = mysql_query("update tbl_std set st_name='$_POST[st_name]',st_roll='$_POST[st_roll]',st_age='$_POST[st_age]',st_mail='$_POST[st_mail]' where id='$id' ");


  $success_message = 'Data Updated succesfully';



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
    <title>Update data to database</title>
</head>
<body>

<h2>Update Data</h2>

<?php

 if(isset($error_message)){ echo $error_message;}
 if(isset($success_message)){ echo $success_message;}

 ?>

<br><br>

<?php

$result = mysql_query("select * from tbl_std where id='$id'");

while($row=mysql_fetch_array($result))
{
    $st_name_old = $row['st_name'];
    $st_roll_old = $row['st_roll'];
    $st_age_old = $row['st_age'];
    $st_mail_old = $row['st_mail'];    

}
?>


<form action="" method="post">
<table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="st_name" value="<?php echo $st_name_old;?>"></td>
    </tr>
    <tr>
        <td>Roll</td>
        <td><input type="text" name="st_roll"  value="<?php echo $st_roll_old;?>"></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><input type="text" name="st_age"  value="<?php echo $st_age_old;?>"></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td><input type="text" name="st_mail"  value="<?php echo $st_mail_old;?>"></td>
    </tr>
    <tr>
        
        <td><input type="submit" value="Update" name="form1"></td>
    </tr>
</table>

<input type="hidden" name="id" value="<?php echo $id;?>">

<br><a href="view.php">Go to previous page</a>

</form>

    
</body>
</html>