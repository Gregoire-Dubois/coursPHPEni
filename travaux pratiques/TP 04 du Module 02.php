<?php

/*
 * Écrire une fonction qui prend en paramètre un nombre inférieur à 1000 tire aléatoirement des nombres inférieurs à 1000 jusqu'à tirer la valeur passée en
paramètre retourne le nombre de tirages réalisés
 *
 */
function randomFunction($nombre){
    $nb = $nombre;
    $attempt = 0;
    if ($nb<1000){
        $randomNumber = rand(0,1000);
        while ($nb != $randomNumber){
            $randomNumber = rand(0,1000);
            if ($randomNumber === $nb){
                $attempt++;
                echo 'Il a fallu ' . $attempt . ' tentatives pour trouver le nombre alétoire';
                break;
            }
            $attempt++;
        }

    }else{
        echo "Merci d'utiliser des entiers inférieurs à 1000";
    }
}

randomFunction(6);

/*
 *  Exercice 2 Écrire une fonction prenant deux entiers en paramètres.
Après l'appel à cette fonction, les deux valeurs doivent être
ordonnées par ordre décroissant.
 */

function whoIsTheBigger($nb1, $nb2){
    $nombre1 = $nb1;
    $nombre2 = $nb2;

    if ($nombre1> $nombre2){
        echo $nombre1;
    }else{
        echo $nombre2;
    }
}
whoIsTheBigger(50,10);
