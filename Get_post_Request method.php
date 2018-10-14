<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get Post & Request Method</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

if(isset($_REQUEST["message"])){

    $mess = $_REQUEST["message"];
    if($mess=true){

        echo"Success";
    }


    else{

        echo"Error";
    }
}

?>
<form action="result.php" method="post">

<table>

<tr>
   <td>Name:</td>
   <td><input type="text" name="s_name"></td>
</tr>

<tr>
   <td>Age:</td>
   <td><input type="text" name=s_age></td>
</tr>

<tr>
   <td><input type="submit" value="Joma"</td>
</tr>

</table>



</form>





    
</body>
</html>