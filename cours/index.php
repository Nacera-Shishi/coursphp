<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cfitech</title>
    <button>
        <a href="#"> Accueil </a>
    </button>
    <button>
        <a href="contact.php">contact</a>
    </button>
    <button>
        <a href="formation.php"> Formation </a>
    </button>
    <button>
        <a href="emploi.php"> Emploie </a>
    </button>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<?php
    include "hearder.php"
    ?>
    <div class="para">
    <p> Bienvenu chez Cfitech interesser <br> par nos formation venez vous inscrire 
    sur place </p>
    </div>
    <?php
    include "menu.php"
    ?>
    

    <div class="principal">
    <div class="gauche">
        <p class="p1">
        <br> INITIATION A L’INFORMATIQUE
        <br> Installation Windows 10, Installation Linux, Mathématiques dédiés
        <br> à l’informatique, Algorithmique, CMD
        <br>
        <br> La formation se déroule du
        <br> 15/01 au 31/03/2022
        <br>
        <br> Lieu: Rue de l’Eglise Ste-Anne 63,
        <br> 1081 Koekelberg.
        <br> Renseignements et inscriptions au 
        <br> 02/445 39 08.
        </p>
    </div>
  
<div class="milieu">
    <p>
    <br> TECHNICEN PC/RESEAUX
    <br> Réparation PC/Gsm’s, Linux Serveur, Microsoft Serveur 2016, Réseaux CCNA
    <br>
    <br> La formation se déroule du
    <br> 01/09/21 au 30/06/22
    <br>
    <br> Lieu: Rue de l’Eglise Ste-Anne 63,
    <br> 1081 Koekelberg.
    <br> Renseignements et inscriptions au
    <br> 02/445 39 08
    </p>
</div>

<div class="droite" >
    <p>
       <br> WEBDEVELOPPEUR
       <br> Html5, Css3, Bootstrap, SASS, Javascript, PHP Interface CLI, 
       <br> GIT, GITHUB
       <br>
       <br> La formation se déroule du
       <br> 01/09 au 24/12/21
       <br>
       <br> Lieu: Rue de l’Eglise Ste-Anne 63,
       <br> 1081 Koekelberg.
       <br> Renseignements et inscriptions au 
       <br> 02/445 39 08
    </p>
</div>
</div>

<?php 

include("lesFonction.php");

?>
</body>
<br>
<footer>
    <?php 
    include "footer.php"
    
    ?>
</footer>
</html>