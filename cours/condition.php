
    <?php 

    /*$note = 10;  
    
    if ($note > 10){     echo "Bien joué vous avez réussi !"; 
    }else{      echo "C’est dommage, vous feriez mieux la prochaine fois";  } 
   */
   
   /*$note = readline('Entrer une note: ');
   echo $note;
    if ($note > 10){
       echo "Bien joué vous avez réussi !"; 
   }else{
       echo "C’est dommage, vous feriez mieux la prochaine fois";  } 
  

  $age= readline('veuillez introduire un age: ');
     if($age>18){
         echo 'vous etes un adulte et vous avez: '.$age."ans";
     }
     elseif($age==18){

         echo 'vous avez '.$age."ans"." bienvenue a l'age adulte";

     }else{
        
        echo "vous avez ".$age."ans n'etes pas encore majeur";
     
    }

$age = readline(' Veuillez votre age : ');
if (is_numeric($age)) {
    if ($age == 18) {
        echo "Vous avez " . $age . " ans " . "bienvenu dans l’âge adulte";
    } elseif ($age < 18) {
        echo ("Vous avez moins de 18 ans");
    } elseif ($age > 18) {
        echo "Vous êtes un adulte et vous avez " . $age . " ans";
    }
} else {
    echo ("Valeur non numerique");
}




$sexe= readline('veuillez introduire votre Sexe: ');
if($sexe=="F"){
    echo "vous etes une femme";
}
elseif($sexe=="M"){

    echo "vous etes un homme";
}

    elseif($sexe=="X"){

        echo "vous etes autre chose";


}else{
   
   echo "veuillez indiquer votre sexe soite F,M,X";

}

$sexe=readline("Entrez votre sexe : ");
if ($sexe == "M"){
    echo "vous êtes un homme";
}else if($sexe == "F"){
    echo "vous êtes une femme";
}else{
    echo "vous êtes un autre";
}


$action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 : 
Se soigner, 4 : Fuir, 5 : Ne rien faire) : "); if ($action === 1){     echo "Vous attaquez"; }else if($action === 2){     echo "Vous défendez"; }elseif($action === 3){     echo "Vous vous soignez"; }elseif($action === 4){     echo "Vous fuyez"; }elseif($action === 5){ 
    echo "Vous ne faites rien"; 
}else{     echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5"; } 



$jourDeLaSemaine= readline("Veuillez entrer un jour semaine en nombre: ");

switch($jourDeLaSemaine){

    case 1 :
        echo "Nous sommes lundi";
        break;
    case 2 :
        echo "Nous sommes mardi";
        break;
    case 3 :
        echo "nous sommes mercredi";
        break;
    case 4;
        echo "nous sommes jeudi";
        break;
    case 5;
       echo "nous somme vendredi";
       break;
    case 6;
       echo "nous sommes samedi";
       break;
    case 7;
       echo "nous sommes dimanche";
       break;
    default;
      echo "ce n'est pas un jour de la semaine!!";

}  
*/


    ?>
