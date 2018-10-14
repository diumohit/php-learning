<?php

ob_start();

session_start();

if($_SESSION['name']!='kissuparina'){


    header('location:login.php');
}


?>





<?php
 include ('config.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View data from database</title>
     
     <script>
       function confirm_delete(){

               return confirm('Sure want delete this data?');

       }
     
     </script>


</head>
<body>
    
   <table border="2px" cellspacing="2" cellpadding="5">
       <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Roll</th>
            <th>Age</th>
            <th>E-mail</th>
            <th colspan="2">Action</th>
       </tr>

<?php
    $i=0;
   $result = mysql_query("select * from tbl_std ");

   while($row=mysql_fetch_array($result))
   {
       $i++;

?>


       <tr>
           <td><?php echo $i;?></td>
           <td><?php echo $row['st_name'];?></td>
           <td><?php echo $row['st_roll'];?></td>
           <td><?php echo $row['st_age'];?></td>
           <td><?php echo $row['st_mail'];?></td>
           <td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
           <td><a onclick="return confirm_delete();" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
           
       </tr>
<?php

   }
?>
   </table>



<br><a href="index.php">Go to previous page</a>

</body>
</html>