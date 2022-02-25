<?php




function estAdulte($age) : bool{
        if($age >=18){
            return true;
        }
        return false;
    }
function estFemme($sexe) : bool{
        if($sexe == "F"){
            return true;
        }
        return false;
    }

function moyenne2nombre($a,$b){
        return addition($a,$b)/2;
        }

function division($nb1,$nb2){
        return $nb1 / $nb2 ;
        }

function multiplication($nb1,$nb2){
        return $nb1 * $nb2 ;
        }
    
function soustraction($nb1,$nb2){
            return $nb1 - $nb2 ;
        }

function addition($nb1,$nb2){
            return $nb1 + $nb2 ;
        } 

function ouiOuNon(?string $phrase = null) : bool{
    while(true){
        $reponse = readline($phrase . " - (o)ui/(n)on : " );
        if($reponse ==="o"){
            return true;
        }elseif($reponse === "n"){
            return false;
            }
        }
}
        
?>