<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_GET['class']) AND isset($_GET['cours']) AND isset($_GET['niveau']))

{
    echo 'Le cours que nous suivant est: '.$_GET['class'].' '.$_GET['cours'].' '.$_GET['niveau'];
}else{
    echo 'il faut indiquer les informations de la classe du cours et du niveau';
}


?>


</body>
</html>