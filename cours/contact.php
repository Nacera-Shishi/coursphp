<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Contact</title>
    <button>
        <a href="index.php"> Accueil </a>
    </button>
    <button>
        <a href="#">contact</a>
    </button>
    <button>
        <a href="formation.php"> Formation </a>
    </button>
<link rel="stylesheet" href="style2.css">
</head>

<body>


<?php
 include "hearder.php"
 ?>
 
<p>Programmes des cours
Formation web developer</p> 
<br>
<nav>
    <ul>
        <li>
         Maîtrisez HTML5 et CSS3
        </li>
    </ul>
</nav>
<nav>
    <ul>
        <li>
         PHP et MySQL
        </li>
    </ul>
</nav>
<nav>
    <ul>
        <li>
         Angular
        </li>
    </ul>
</nav>
<nav>
    <ul>
        <li>
         Javascript
        </li>
    </ul>
</nav>
<nav>
    <ul>
        <li>
         Symphony programing
        </li>
    </ul>
</nav>

<?php
    include "menu.php"
    ?>


    <?php 
    
    echo "<br>Pour qui ?
          <br> Être demandeur (se) d’emploi inoccupé(e), inscrit(e) à Actiris et disponible à temps plein et avoir entre 18 et 45 ans.
          <br>
          <br> Horaires:
          <br> Lundi au vendredi 8h30 à 16h
          <br>
          <br>
          <br> Intéressé (e) ? Que faire
          <br> Présentez-vous directement à notre adresse :
          <br> CFITECH
          <br> Rue de l’Eglise Sainte-Anne 63
          <br> 1081 Koekelberg
          <br>
          <br>Tél: 02 445 39 08
          <br>
          <br> L’inscription du : Lundi au vendredi
          <br>Heure: 9h à 16h
          <br>
          Prochaine session
          Du 18/01/2021 au 24/12/2021"
          
    
    ?>
</body>

<footer>
    <?php 
    include "footer.php"
    
    ?>
    <br>
    <?php
    include("lesFonction.php");
    perimetreDunCarrer(12);
    ?>
</footer>

</html>