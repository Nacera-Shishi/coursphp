<?php

/*
    $user1 = "Julien";
    $user2 = "Nacera";
    $user3 = "Robert";
    $user4 = "Shams";
    $user5 = "Nabil";
    $user6 = "Sebastien";
    $user7 = "Kainat";
    $user8 = "Sanja";
    $user9 = "Carine";
    $user10 = "Rinor";
    echo $user1 . "<br>" .$user2 . "<br>" .$user3 . "<br>" .$user4 . "<br>" .$user5 . "<br>" .$user6 . "<br>" .$user7 . "<br>" .$user8 . "<br>" .$user9 . "<br>". $user10 . "<br>" ;
    */

    /*
    $users=["Julien", "Nacera", "Shams", "Nabil", "Robert", "Sebastien", "Kainat","Sanja","Carine","Rinor" ];
    foreach($users as $user){
        echo $user . ", ";
    }
    */
    
  
    /*
    $nb = readline("Introduisez un nombre : ");
    if (is_numeric($nb)) {
        if ($nb %2) {
            echo "Votre nombre " . $nb . " est impair";
        } else {
            echo "Votre nombre " . $nb . " est pair";
        }
    } else {
        echo "Vous avez entrer autre chose qu'un nombre";
    }*/
    /*$nb = readline("Introduisez un nombre : ");
    if (is_numeric($nb)) {
        if ($nb % 2==0) {
            echo "Votre nombre " . $nb . " est pair";
        } else {
            echo "Votre nombre " . $nb . " est impair";
        }
    } else {
        echo "Vous avez entrer autre chose qu'un nombre";
    }*/



    /*
    $chaine=readline("Entrez un mot(écrivez \"quitter\" pour arrêter) : ");
    $tab=[];
        while ($chaine !== "quitter" ){
        $tab[]=$chaine;
        $chaine=readline("Entrez un mot(écrivez \"quitter\" pour arrêter) : ");
    }
    foreach($tab as $mots){
        echo $mots . "\n";
    }
    */
    

/*
    $chaine=readline("Entrez un mot(écrivez \"fin\" pour arrêter) : ");
    $nb=0;
    while ($chaine !== "fin" ){
        $nb++;
        $chaine=readline("Entrez un mot(écrivez \"fin\" pour arrêter) : ");
    }
   echo "vous avez introduis $nb mot(s)";
    
*/


/* exercice 6
$number = readline("Entrer un montant entre 100 et 200: ");

if (is_numeric($number)) {


    if ($number >= 100 && $number <= 200) {

        echo "Vous avez introduit le bon montant " . $number . "$";
    } elseif ($number > 200) {

        echo "Vous avez dépasser la limite " . $number . "$";
    } else {

        echo "Vous n'avez pas assez d'argent " . $number . "$";
    }
} else {
    echo "Vous devez indroduire un montant et pas un mot !! ";
}
*/

/* exercice 7
$ecrire = readline("Ecrivez un chiffre (1 = bonjour, 2 = aurevoir, 3 = bien joué, 4 = bonne nuit, 5 = a tanto, 6 = arrête un peu, 7 = 10+10=20, autre surprise):  ");

    switch ($ecrire) {
    case 1 :
        echo "Bonjour";
        break;
    case 2 :
        echo "Aurevoir";
        break;
    case 3 :
         echo "Bien joué";
         break;
    case 4 :
        echo "Bonne nuit";
        break;
    case 5 :
        echo "A tanto";
        break;
    case 6 :
        echo "Arrête un peu";
        break;
    case 7 :
        echo "10 + 10 = 20";
        break;

    default:
        echo "La terre est carrée.";
        break;
}*/

/*
$classe = [
    [
        "Prenom" => "Carine",
        "Sexe"  => "F",
        "Notes" => [60, 72, 65, 85, 92]
    ],
    [
        "Prenom" => "Sanja",
        "Sexe"  => "F",
        "Notes" => [63, 75, 69, 82, 90]
    ],
    [
        "Prenom" => "Robert",
        "Sexe"  => "M",
        "Notes" => [95, 89, 98, 87, 92]
    ],
    [
        "Prenom" => "Sebastien",
        "Sexe"  => "M",
        "Notes" => [94, 90, 99, 84, 82]
    ],
    [
        "Prenom" => "Yasin",
        "Sexe"  => "M",
        "Notes" => [100, 99, 95, 98, 92]
    ]
];

*/

/*exercice 8
foreach($classe as $homme){
    if($homme['Sexe'] == "M"){
        echo $homme['Prenom'] . " de sexe ".$homme['Sexe'] . " <br>";
    }
}
*/
/* exercice 9
foreach($classe as $femme){
    if($femme['Sexe'] == "F"){
        echo $femme['Prenom'] . " de sexe ".max($femme['Notes']) . " <br>";     
    }
}
*/
/* exercice 10
foreach($classe as $user){
    foreach ($user as $key => $value) {
        if (is_array($value)) {
            echo $key.": [";
            foreach ($value as $notes) {
                echo $notes. "/100 ";
            }
            echo "]<br>";
        }else{
            if ($key != "Sexe"){
                echo $value." ";
            }
        }
    }
}

    
    /*for($i=0; $i < sizeof($users); $i++){
        echo $users[$i];
    }*/
    /*
    foreach($users as $ok){
        echo $ok;
    }*/
    /*
    $nb=0;
    while($nb < sizeof($users)){
        echo $users[$nb];
        $nb = $nb+1; 
    }
    */
  
    //Exercice11
    // c'est pour calculer la moyenne d'un tableau
    /*
    foreach($classe as $user){
        foreach ($user as $key => $value) {
            if (is_array($value)) {
                echo "Moyenne de : ".array_sum($value)/sizeof($value)."<br>";
            }else{
                echo $value." ";
                }
            }
        }
    */
    //exercice 12
    // afficher tous les utilisateur prenom,notes 
/*
    foreach($classe as $user){
        foreach ($user as $key => $value) {
            if (is_array($value)) {
                echo $key.": [";
                foreach ($value as $notes) {
                    echo $notes. "/100 ";
                }
                echo "]<br>";
            }else{
                    echo $value." ";
        
            }
        }
    }
*/

//Exercice 13
//creer un programme qui permet de demande d'ecrire des chiffre


$reversed= arsort($tab);
$ecrire = readline("Ecriver des chiffre et pour quitter ecriver 0: ");
$tab =[];
if (is_numeric($ecrire)) {
    while ($ecrire != 0 OR is_numeric($ecrire)) {
        if(is_numeric($ecrire)){
        $tab[] =$ecrire;
        $ecrire = readline("Ecriver des chiffre et pour quitter ecriver 0: ");
        echo "[ ";
        }else {
           
        }
    }foreach ($tab as $value) {
        
        echo $value." ";
        
    }

        echo " ]";
    
}
       
    


    ?>
    