<?php 


/*

//exercice 1 :

$user1 = "Julien";
$user2 = "Robert";
$user3 = "Carine";
$user4 = "Sanja";
$user5 = "Shams";
$user6 = "Sebastien";
$user7 = "Rinor";
$user8 = "Kainat";
$user9 = "Nabil";
$user10 = "Nacera";



echo  "voici les 10 utilisateur: "."<br>".$user1."<br>".$user2."<br>".$user3."<br>".$user4."<br>".$user5."<br>".$user6."<br>".$user7."<br>".$user8."<br>".$user9."<br>".$user10;

*/

/*

//exercice 2:

$utilisateur =  ["Julien","Robert","Carine","Sanja","Shams","Sebastien","Rinor","Kainat","Nabil","Nacera"];
 
foreach ($utilisateur as $value) {
    
    echo $value.",";
}
*/


/*
//exercice 3:

$nombre = readline("Entrer un nombre pair ou impair: ");
 if (is_numeric($nombre)){
     if($nombre% 2 == 0){
        echo "votre nombre ".$nombre." est pair";
     }else {
        echo "votre nombre ".$nombre." est impair";
     }
 }else {
     echo ('cette valeur n\'\est pas un chiffre');
 }
*/



// exercice 4:
/*
$tab = [];
$quitter = "quitter";
$mot = readline("Ecrivez moi quelque mot est pour quitter ecriver quitter: ");
while ($mot !== $quitter) {
    if ($mot !== $quitter) {
        $tab[] = $mot;
    }
    $mot = readline("Ecrivez moi quelque mot est pour quitter ecriver quitter: ");
   }
    foreach ($tab as $mot ) {
        echo $mot."\n";
    }

*/


//exercice 5:
/*
$i= 0;
$fin = "fin" ; 
$write = readline("Entrer un mot( écrivez fin pour arrêter): ");
while ($write !== $fin){
    $i++;
    $write = readline("Entrer un mot( écrivez fin pour arrêter): ");
}
echo  "Vous avez introduit: ".$i." mots";
*/


/*

//Exercice 6

$number = readline("Entrer un montant entre 100 et 200: ");

if(is_numeric($number)){
    

     if($number>= 100 && $number<= 200){ 
     
        echo "Vous avez introduit le bon montant ".$number."$";
    
        }elseif($number>200){

        echo "Vous avez dépasser la limite ".$number."$";
    
        }else{
       
        echo "Vous n'avez pas assez d'argent ".$number."$";
             
             }

}else {

        echo "Vous devez indroduire un montant et pas un mot !! ";
          
    }


 */

//exercice 7
/*

$ecrire = readline("Ecrivez un chiffre entre 1 et 10 (1 = bonjour, 2 = aurevoir, 3 = bien joué, 4 = bonne nuit, 5 = a tanto, 6 = arrête un peu, 7 = 10+10=20, autre surprise):  ");
  
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
}
*/

/*
//Exercice 8

$user1 = ["Prenom"=>"Carine",
          "Sexe"  => "F",
          "Notes" => [60,72,65,85,92]
         ];

$user2 = ["Prenom"=>"Sanja",
          "Sexe"  => "F",
          "Notes" => [63,75,69,82,90]
         ];

$user3 = ["Prenom"=>"Robert",
          "Sexe"  => "M",
          "Notes" => [95,89,98,87,92]
         ];

$user4 = ["Prenom"=>"Sebastien",
          "Sexe"  => "M",
          "Notes" => [94,90,99,84,82]
         ];

$user5 = ["Prenom"=>"Yasin",
          "Sexe"  => "M",
          "Notes" => [100,99,95,98,92]
          ];


*/







                       

?>
