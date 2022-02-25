<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploie</title>
    <button>
        <a href="index.php"> Accueil </a>
    </button>
    <button>
        <a href="contact.php">contact</a>
    </button>
    <button>
        <a href="formation.php"> Formation </a>
    </button>
    <button>
        <a href="#"> Emploie </a>
    </button>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
<fieldset>

<?php 
$a = "2000$";
$b = "l'Informatique";
$c = "L'informatique est la branche dans laquelle je travaille.";
$d = 11.5;

echo "<br><strong>"."<br>Bonjour<br><br>"."</strong> "." Le salaire auquel j'aspire pour bien vivre: "."<strong>".$a."</strong>".
"<br>"."La branche a laquelle je travaille ou souhaiterais travailler: "."<strong>".$b."</strong>".
"<br>"."Pour preciser: "."<strong>".$c."</strong>".
"<br>"."La note moyenne que j'ai obtenue au bac: "."<strong>".$d."</strong>"."<br><br><br>";

?>
 
</fieldset>

<?php
$prenom = array('François ','Michel ','Nicole ','Veronique ',"Benoit");

for($x=0;$x<5;$x++){
    echo $prenom[$x];
}

?>

<br>
<?php 
$semaine = 5;
switch($semaine)
{
    case 1:
     echo "Nous sommes Lundi";
     break;
    case 2:
        echo "Nous somme Mardi";
        break;
    case 3:
        echo "Nous somme Mercredi";
    case 4:
        echo "Nous somme Jeudi";
        break;
    case 5:
        echo "Nous somme vendredi";
        break;
    case 6:
        echo "Nous somme Samedi";
        break;
    case 7:
        echo "Nous somme Dimanche";
        break;
    default:
       echo "ce n'est pas un jour de la semaine";

}

include "footer.php"

?>
</body>
