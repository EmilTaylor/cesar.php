<?php

$mot = $_POST['saisie'];   //Récupérer le mot entré sur la page html//
$mot = strtolower($mot);   //supprime les majuscules//
$clef=$_POST['clef'];
// $mot="beweb";
 //$clef=3;

$alpha=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",);

for ($i=0; $i <strlen($mot) ; $i++) {    //i++ pour avancer//
//naviguer dans le mot//
  for ($j=0; $j<count($alpha); $j++){
    //naviguer dans l'alphabet//
    $val=$j+$clef;
    //echo $val."val";
    while ($val> 25) {                //TantQue j+clef<25//
    $val=$val -26;
    //echo"coucou";
    }
    if ($alpha[$j]==$mot[$i]) {
        $mot[$i]=$alpha[$j+$clef];
        //var_dump($mot);
        break;
    }

    }
  }

echo $mot;
