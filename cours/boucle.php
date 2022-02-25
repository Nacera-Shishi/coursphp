<?php 
/*
$nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");     while($nombre !== 0){  echo "Voici votre nombre : ". $nombre . "\n"; 
    $nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : "); 
} 


$nombre=(int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : "); 
    $numéroGagnant = rand(0,10);     while($nombre !== $numéroGagnant){ 
        echo "Mauvais numéro, vous n'avez pas gagné !". "\n"; 
        $nombre=(int)readline("Retentez votre chance, entrez un nombre à nouveau : ");  
    } 
    echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro $numéroGagnant"; 

$stop="stop";

$Prenom=readline("Entrez un mot ou un prenom: "); 
       while($Prenom!==$stop){ 
$Prenom=readline("Entrez un mot ou un prenom: ");    
    } 
    echo " Bienvenu ! "; 
  

for($i=0; $i < 10;$i++){         echo $i . "<br>"; 
} 

$JoursSemaine = ["Lundi",
                 "Mardi",
                 "Mercredi",
                 "Jeudi",
                 "Vendredi",
                 "Samedi",
                 "Dimanche"];

for ($i=0; $i < sizeof($JoursSemaine)  ; $i++) { 
    echo "$JoursSemaine[$i] ";
}
echo sizeof($JoursSemaine);


$mois = ["Janvier",
         "Février",
         "Mars",
         "Avril",
         "Mai",
         "Juin",
         "Juillet",
         "Aout",
         "septembre",
         "Octobre",
         "Novembre",
         "Decembre"];

for ($i=1; $i<sizeof($mois) ; $i+=2) { 
    echo $mois[$i].' ' ;
}



$nombre = [11,18,99,17,65220,6485,78,97,48,2,112];

for ($i=0; $i < sizeof($nombre) ; $i++) { 
    if ($nombre[$i]%2 == 0) 
    echo "$nombre[$i] est pair \n";
}



$notes = [18,13,5,9,10];     foreach ($notes as $note) {         echo $note . " "; 
} 


$users = [ 
    'firstname' => 'Lara', 
    'lastname' => 'Croft', 
    'sexe' => 'F', 
    'dateOfBirth' => "23/10/1995", 
    'notes' => [18,13,5,10,9], 
    'city'=> 'London' 
];

foreach ($users as $key => $value) {
    if (is_array($value)){
        echo $key." : [";
        foreach ($value as $key => $note) {
            
            echo $note. "/20, ";
        }
        echo "]<br>";
    }else{
        echo $key. ' : ' .$value. '<br>';  
    
    }
    
}
*/



/*$mois = ["Janvier",
         "Février",
         "Mars",
         "Avril",
         "Mai",
         "Juin",
         "Juillet",
         "Aout",
         "septembre",
         "Octobre",
         "Novembre",
         "Decembre"];


foreach ($mois as $value) {
    echo $value." - ";
}

echo "</br>";

$notes = [18,13,5,9,10]; 

foreach ($notes as $value) {
     
    if ($value<=9) {
        echo "tu as raté avec la note de ".$value." /20 <br>";
    }elseif($value>10){
        echo "tu as reussi avec la note de ".$value." /20 <br>";
    }else{
        echo "tu as tous juste la moyenne ".$value." /20 <br>";
    }
}
*/
/*
$mot = readline("Veuillez entrez un mot : ");
    if($mot === strrev($mot)){
        echo "Votre mot est un palindrome et donne ". strrev($mot). " a l'envers";
    }else{
        echo "Votre mot renversé ne donne pas le même mot ".  strrev($mot);
    }
*/
/*
$mot = readline("Veuillez entrez un mot : ");
    $reverse = strrev($mot);
    if(strtolower($mot) == strtolower($reverse)){
        echo "Votre mot est un palindrome et donne ". strtolower($reverse). " a l'envers";
    }else{
        echo "Votre mot renversé ne donne pas le même mot ".  strtolower($reverse);
    }
*/
/*
$notes = [18,13,5,9,10];
$sommes= array_sum($notes);
*/

  
    $tab = [];
    $shams = "";
    while($shams !== "stop"){
        $shams =readline("Entrez un nouveau mot ou taper \"stop\" pour arreter : ");
        if($shams !== "stop"){
            $tab[]= $shams;
        }
    }
    foreach($tab as $mot){
        echo "$mot, ";
    }


    

?>