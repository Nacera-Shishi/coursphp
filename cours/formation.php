<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="css/style3.css">
   <button>
        <a href="index.php"> Accueil </a>
    </button>
    <button>
        <a href="contact.php">contact</a>
    </button>
    <button>
        <a href="#"> Formation </a>
    </button>
    <link rel="stylesheet" href="style3.css">
</head>
<body>


 <?php
 include "hearder.php"
 ?>

<?php
    include "menu.php"
    ?>

    <?php
    
    
    echo " <br> Centre de formation IT
           <br> Nos formations en groupe
           <br> Nos Formations
           <br> Initiation en informatique à Bruxelles
           <br> Formation Helpdesk informatique à Bruxelles
           <br> Formation Technicien PC et Réseaux à Bruxelles
           <br> Formation web developer à Bruxelles" 
    
    ?>
    
</body>
<footer>
    <?php 
    include "footer.php"
    
    ?>
</footer>
</html>