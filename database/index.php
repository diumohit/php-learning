<?php

ob_start();

session_start();

if($_SESSION['name']!='kissuparina'){


    header('location:login.php');
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
    
    <h2>Select your option</h2>

    <ul>
    <li><a href="insert.php">Insert data</a></li>
    <li><a href="view.php">show data</a></li>
    <li><a href="logout.php">Logout </a></li>
    <li><a href="change_password.php">change password </a></li>
    </ul>




</body>
</html>