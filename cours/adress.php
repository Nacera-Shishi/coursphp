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
if(isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['ville']) AND isset($_GET['repeter']) )
{
for($i=0; $i < $_GET['repeter']; $i++ )
{
 echo 'Bonjour '.$_GET['prenom'].' '.$_GET['nom'].' qui vient de '.$_GET['ville'].$_GET['repeter'].' ! <br>';
}
}else
{
    echo 'il faut renseigner le nom, un prenom et une ville';
}

?>

</body>
</html>