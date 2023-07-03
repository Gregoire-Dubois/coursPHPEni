<?php
/*
Exercice 1

Transformer une phrase composée de mots écrit s dans des casses différentes afin que chaque mot ait son premier
caractère en majuscule.
Exemple : bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.
 *
 */

$sentence = 'bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR';
echo ucwords(strtolower($sentence));

/*
 *
 Exercice 2
Formater l affichage d une suite de chaînes contenant des noms et prénoms en respectant
les critères suivants :
- un prénom et un nom par ligne,
- affichés sur 20 caractères chacun ;
- toutes les initiales des mots doivent être alignées verticalement.
 */


// Calculer votre âge à l'instant actu el à la seconde près.

$birthday = strtotime('1986-01-24 13:05:00');
$currentDateTime = strtotime('2023-07-3 18:00:00');
$difference = $birthday - $currentDateTime;
echo $difference;
