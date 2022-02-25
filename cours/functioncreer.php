<?php
//exo 1 function qui permet d'afficher les prenoms indiquer
/*
function prenom($first1,$first2,$first3,$first4){
 echo "Hello ".$first1." !!! </br>"."Hello ".$first2." !!! </br> "."Hello ".$first3." !!! </br>"."Hello ".$first4." !!!";
}
echo prenom("Ellen","Robert","Carine","Rinor")."</br>";
*/

//--------------------------------------------------------

//exo 2

/*
$tabNom = ["julien", "robert", "sanja", "ellen", "shams"];
    hello($tabNom);

    function hello($tableauDePrenom){
     */
    //-----------------
        /*
        foreach($tableauDePrenom as $prenom) {
            echo "hello ".$prenom."\n";
        }
        */
        //------------
        /*
        for($i=0;$i < sizeof($tableauDePrenom);$i++){
            echo "Hello " . $tableauDePrenom[$i]  ;
        }
        */
        //-------------
        /*
        $nb =0;
        while($nb < sizeof($tableauDePrenom)){
            echo "Hello " . $tableauDePrenom[$nb] . "<br>";
            $nb= $nb+1;
        }
        */
    //}

//-----------------------------------------------------------

//exo 3
/*
function hello($nom = null){
    if ($nom != null){
        return "Hello ". $nom . " !!!";
    }
    return "Hello World !!!";
}
$prenom = readline("Veuillez introduire un prénom : ");
$helloPrenom = hello($prenom);
echo $helloPrenom;
*/

//------------------------------------------------------------

//exo 4

/*
function bienvenue($nom, $prenom, $email, $age){
        return "Bienvenue ". $nom . " ". $prenom . " !!!\nVous avez " .$age . " ans.\n"."Voici votre mail " .$email; 
    }
    $prenom = readline("Veuillez introduire un prénom : ");
    $nom = readline("Veuillez introduire un nom : ");
    $email = readline("Veuillez introduire un email : ");
    $age = readline("Veuillez introduire votre age : ");
    $helloPrenom = bienvenue($nom,$prenom,$email,$age);
    echo $helloPrenom;

*/

//---------------------------------------------------------------

//exo 5
/*
function adulte($age){
    if ($age < 18) {
        echo "vous etes mineur";
    }else{
        echo "vous etes majeur";
    }
}$nomb=readline("veuillez entrer votre age: ");
adulte($nomb);
*/

//-----------------------------------------------------------------

//exo 6
/*
function somme($nb1,$nb2){
    return $nb1 + $nb2 ;
}

$nbr1 = readline("Veuillez introduire un premier nombre : ");
$nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
//$moyenne = somme($nbr1,$nbr2)/2;
echo $nbr1 . " additioné à " . $nbr2 . " donne ".  somme($nbr1,$nbr2);
*/

//-------------------------------------------------------------------

//exo 7
/*
function soustraction($nb1,$nb2){
    return $nb1 - $nb2 ;
}

$nbr1 = readline("Veuillez introduire un premier nombre : ");
$nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
echo $nbr1 . " soustraction de " . $nbr2 . " donne ".  soustraction($nbr1,$nbr2);
*/

//---------------------------------------------------------------------

//exo 8
/*
function multiplication($nb1,$nb2){
    return $nb1 * $nb2 ;
}

$nbr1 = readline("Veuillez introduire un premier nombre : ");
$nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
echo $nbr1 . " multi de " . $nbr2 . " donne ".  multiplication($nbr1,$nbr2);
*/

//------------------------------------------------------------------------

//exo 9

/*
function division($nb1,$nb2){
    

    if($nb2 != 0){
        return $nb1 / $nb2;

    

    } while ($nb2 == 0) {
        echo "zero n'est pas divisable";

        $nb2 = readline("veuillez introduire un nombre autre que 0 : ");
        
    }   return $nb1/$nb2;
    
    
} 

$nbr1 = readline("Veuillez introduire un premier nombre : ");
$nbr2 = readline("Veuillez introduire un deuxieme nombre : ");

echo $nbr1 . " division de " . $nbr2 . " donne ".  division($nbr1,$nbr2);
*/

// Exos 9 correction 
/*
function division($nb1,$nb2){
    return $nb1 / $nb2 ;
}
$nbr1 = readline("Veuillez introduire un premier nombre : ");
$nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
while($nbr2 ==0){
    echo "Vous avez tenter une division par 0, recommencer \n";
    $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
}
echo $nbr1 . " divisé par " . $nbr2 . " donne ".  division($nbr1,$nbr2);

*/
//exo 9 correction 2
/*
function division(){
    $div = 0;
    while ($div === 0) {
    $n1 = readline("Veuillez introduire un premier nombre : ");
    $n2 = readline("Veuillez introduire un deuxieme nombre : ");
        if ($n2 == 0){
            echo "Vous avez tenter une division par 0, recommencer\n";
        }else{
            $div = $n1/$n2;
            echo $n1." divisé par ".$n2." donne ".$div;
        }
    }
}
division();
*/

//exo 9 correction 3

/*
function division($nbr,$nbr2){
    $div = 0;
    while ($div === 0) {
        if ($nbr2 == 0){
            echo "Vous avez tenter une division par 0, recommencer\n";
            $nbr = readline("Veuillez introduire un premier nombre : ");
            $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
        }else{
            $div = $nbr/$nbr2;
            echo $nbr." divisé par ".$nbr2." donne ".$div;
        }
    }
}
$n1 = readline("Veuillez introduire un premier nombre : ");
$n2 = readline("Veuillez introduire un deuxieme nombre : ");
division($n1,$n2);
*/

//-------exemple fonction dans fonction
/*
function addition($shams,$nacera){
    return $shams+ $nacera ;
}
function moyenne2nombre($a,$b){
    return addition($a,$b)/2;
}
$nbr1 = readline("Veuillez introduire un premier nombre : ");
$nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
echo "La moyenne de " .$nbr1 . " et " . $nbr2 . " donne ".  moyenne2nombre($nbr1,$nbr2);
*/

// exo 10

/*
$users = [
    [
        "Prenom" => "Sarah",
        "Sexe"  => "F",
        "Age" => 35
    ],
    [
        "Prenom" => "Eric",
        "Sexe"  => "M",
        "Age" => 15
    ],
    [
        "Prenom" => "Elisabeth",
        "Sexe"  => "F",
        "Age" => 17
    ],
    [
        "Prenom" => "Karim",
        "Sexe"  => "M",
        "Age" => 45
    ]
];

function estfemme($sexe){
    if ($sexe == "F") {
       return true; 
    }
    return false;
}

function estadulte($age){
    if ($age >= 18) {
       return true; 
    }
    return false;
}

function tableau($tab){
    foreach ($tab as $key => $value) {
        if ($key == "Prenom") {
            echo $value;
        }
        elseif ($key == "Sexe") {
          if (estfemme($value)){
               echo " est une femme ";
          }else{
              echo " est un homme ";
          }
           
        }

        elseif($key == "Age") {
            if (estadulte($value)){
                 echo " majeur(e) age(e) de ".$value." ans </br>";
            }else{
                echo " mineur(e) age(e) de ".$value." ans </br> ";
            }
             
          }
    }


    
}

foreach ($users as $valeur) {
    
    tableau($valeur);

}

*/

// exo 11






?>


