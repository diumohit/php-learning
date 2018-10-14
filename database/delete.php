<?php
 
 include('config.php');

 if(isset($_REQUEST['id'])){

    $id=$_REQUEST['id'];
 

 $result = mysql_query("delete from tbl_std where id='$id'");
 header('location:view.php');
 }

 else{

    header('location:view.php');
 }
?>