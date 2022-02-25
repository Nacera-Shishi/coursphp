<?php

$phrase="Je m'appelle Filali Nacera ";
$longeur=strlen($phrase);

echo'La phrase ci-dessous se comporte '.$longeur.'caractères:</br>'.$phrase;

$ma_variable=str_replace('b','p','bim bam boum');
echo $ma_variable;

$chaine='<br> COMMENT CA JE CRIE TROP FORT???';
$chaine=strtolower($chaine);echo
$chaine;

$chaina='<br> hello les amis comment aller vous??';
$chaina=strtoupper($chaina);echo
$chaina;

$annee=date('Y');
$jour=date('d');
$mois=date('m');
$heure=date('H');
$minute=date('i');

echo"<br>Bonjour Aujourd'hui Nous sommes le ".$jour.'/'.$mois.'/'.$annee.'<br> et il est '.$heure.'h'.$minute;
?>

