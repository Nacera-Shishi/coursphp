<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
    <style>
        .cui{
            color:red;
            text-align:center;
            transition: 1s;
        }
        
        .cui:hover{
            color:darkblue;
        }
        
    
    </style>
</head>
<body>
<div class="cui" >
<?php 
/*
$prenom= "Cuicui";
$age=46;
$poids=82;

echo "voici ".$prenom." il a ".$age." ans et un poids de ".$poids."kilo"

$nbr1=1;
$nbr2=10;
$nbr3=62;

 echo "En calculant la moyenne de c'est nombre: ".$nbr1.", ".$nbr2.", ".$nbr3." voici la moyenne de: ".($nbr1+$nbr2+$nbr3)/3;
 

 $note = [4,5,12,15,18];
 $calcule = ($note[0]+$note[1]+$note[2]+$note[3]+$note[4])/5;
 $somme = ($note[0]+$note[1]+$note[2]+$note[3]+$note[4]);
 $tableau = ["chien","chat","éléphant","tortue"];
 $jourDeSemaine = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
 echo " voici la moyenne du tableau ".$calcule;
 echo " <br> voici la somme des notes du tableau ".$somme;
 echo "<br>".$tableau[1]." ".$tableau[3];
 echo "<br>".$jourDeSemaine[0]." ".$jourDeSemaine[4]." ".$jourDeSemaine[2];


$tab2dim = ["James","Bond","M","7/7/2007",["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"],"London"];
echo "Nom : ".$tab2dim[1]."<br>"."Prenom: ".$tab2dim[0]."<br>"."Sexe : ".$tab2dim[2]."<br>"."Date de Naissance: ".$tab2dim[3]."<br>"."Ville: ".$tab2dim[5]."<br>"."Jour de hier : ".$tab2dim[4][6];
*/

$users = [ 
    'firstname' => 'Lara', 
    'lastname' => 'Croft', 
    'sexe' => 'F', 
    'dateOfBirth' => "23/10/1995", 
    'notes' => [18,13,5,10,9], 
    'city'=> 'London' 
];

$users2 = [ 
    'firstname' => 'Vache', 
    'lastname' => 'Kiri', 
    'sexe' => 'F', 
    'dateOfBirth' => "23/10/1992", 
    'notes' => [18,13,5,10,9], 
    'city'=> 'u.s.a',
    'jourDeLaSemaine'=>['lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'] 
];



$users["lastname"]="Elric";
$users["notes"][3]=17;
$moyenne = ($users2['notes'][0]+$users2['notes'][1]+$users2['notes'][2]+$users2['notes'][3]+$users2['notes'][4])/5;
echo'-------------------------------------------------------------';
echo'<br>';
echo $users["lastname"];
echo '<br>';
echo $users['notes'][3];
echo '<br>';
echo $users['city'];
echo '<br>';
echo $users['notes'][1];
echo '<br>';
echo'-------------------------------------------------------------';
echo '<br>';
echo $users2['firstname'];
echo '<br>';
echo $users2['lastname'];
echo'<br>';
echo $moyenne;
echo'<br>';
echo $users2['jourDeLaSemaine'][3];
echo'<br>';
echo'--------------------------------------------------------------';


?>
</div>
</body>
</html>