<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Up load</title>
</head>
<body>

<?php


if(isset($_POST['form1'])){

     try{

        $_uploaded_file=$_FILES['file1']['name'];
        $_filebasename= substr($_uploaded_file,0 ,strripos($_uploaded_file,'.'));
        $_file_ext= substr($_uploaded_file ,strripos($_uploaded_file,'.'));
        $_f1='mong'.$_file_ext;


        move_uploaded_file($_FILES['file1']['tmp_name'],'topup/'.$_f1);

        list($width, $height, $type, $attr)=getimagesize('topup/'.$_f1);

        echo 'Width of the image:'.$width.'<br>';

         $filesize = filesize('topup/'.$_f1)*.0009765625;

         echo $filesize.'<br>';

         if($filesize>500){


            throw new Exception('File size reached maximum length 2kb');
         }


         if(($_file_ext!='.png')&&($_file_ext!='.jpg')){

           throw new Exception ('Invalid Image format');


         }




     }
     catch(Exception $e){

        $error_message=$e->getMessage();

     } 
}


?>


<?php

if(isset($error_message)){


    echo $error_message;
}



?>

    
 <form action="" method="post" enctype="multipart/form-data">
 
 <table>
     <tr>
         <td>Profile Picture</td>
         <td><input type='file' name='file1'></td>
     </tr>
     <tr>
         <td></td>
         <td><input type='submit' value='Upload' name='form1'></td>
     </tr>
 </table>
 </form>




</body>
</html>