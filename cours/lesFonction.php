<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$a = 30;
$b = "brussels";
$c = "Nacera";

echo "Je m'appelle: ".$c." j'ai ".$a." ans "." j'habite à: ".$b;

?>
<br>

<?php
  function MoyenneAnnuelle($cui1,$cui2,$cui3){
      $mi=($cui1+$cui2+$cui3)/3;
      echo 'votre moyenne annuelle cui: '.$mi;
  }
  MoyenneAnnuelle(1,2,3);
  ?>
  <br>
  <!-- ceci est une fonction qui permet de calculer le perimetre du carrer-->
  <?php 
  function perimetreDunCarrer($cote){
      $calcule=($cote*4);
      echo"le calcule d'un perimetre ".$calcule;
  }
  perimetreDunCarrer(4);
  ?>

  <br>
 <!--ceci est une fonction qui va me permmetre de calculer la surface d'un rectangle-->
  <?php 
    function surfaceDunrectangle($surf1,$surf2){
        $calcul=($surf1*$surf2)*2;
        echo "ceci est la surface du rectangle ".$calcul;
    }
    surfaceDunrectangle(4,8);
  ?>

  <br>
  <!-- ceci est une fonction qui me permetra de calule la surface d'un cercle avec
 exemple: r2*r2*pi(qui vaut 3.14)-->
  <?php 
   function cercle($r2){
       $calcul=($r2*$r2*3.14);
       echo "ceci est la surface d'un cercle ".$calcul;
   }
  cercle(8,3.14);

  ?>

</body>
</html>