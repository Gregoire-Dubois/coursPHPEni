<?php
//Exercice 1

/*
Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes
et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l âge
de la personne.
 */
$tableau1 = array('Dubois' => 'Grégoire', 'Lyon', '37',
                  'Roth' => 'Quentin', 'Bodilis', '33',
                  'Viry' => 'Emmanuelle', 'Lyon', '35'
                  );

$values = array_values($tableau1);

for ($i = 0; $i < count($values); $i++ ){
    echo $values[$i] . "\n";
}

// Exercice 2

/*
 * Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes
et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence
et l âge de la personne avec une série de valeurs associées.
 */


$tableau2 = array(
    'Dubois' => array(
        'prenom' => 'Grégoire',
        'ville' => 'lyon',
        'age' => '37'),

    'Mancel' => array(
        'prenom' => 'Michel',
        'ville' => 'Beauvais',
        'age' => '90'
    )
);

echo $tableau2['Dubois']['prenom'];
echo  $tableau2['Mancel']['ville'];

// Exerice 3

/*
 * Utiliser une b
oucle foreach pour lire les tableaux des exercices 1 et 2 et afficher les informations avec le format suivant :
 Element dupont
    o élément 0 : gérard
    o élément 1 : paris
    o élément 2 : 67
 Element badin
    o élément 0 : aurélie
    o élément 1 : nantes
    o élément 2 : 31
 */


echo 'début de boucle foreach';
foreach ($tableau2 as $nom => $infos){
    echo 'Nom : ' . $nom ."\n";
    echo 'Prenom : ' . $infos["prenom"] . "\n";
    echo 'ville : ' . $infos["age"] ."\n";
}


// Exercice 4
/*
Créer un tableau contenant une liste d'adresses e mail.
Extraire le nom de serveur de ces données puis réaliser des statistiques sur les occurrences de chaque fournisseur d accès.
 */

$tableauAdressesMails = array(
    'greg@orange.fr',
    'mathieu@free.fr',
    'emma@orange.fr',
    'qtn@sfr.fr',
    'claude@orange.fr',
    'remys@orange.fr'
);

$pattern = '/@([^\.]+)/';

$values3 = array_values($tableauAdressesMails);
$total = 0;
$orange = 0;
$free = 0;
$sfr = 0;

for ($i = 0; $i < count($values3); $i++) {
    echo $values3[$i] . "\n";
    $total++;

    $fournisseur = preg_match($pattern, $values3[$i], $matches);

    if ($fournisseur) {
        switch ($matches[1]) {
            case 'orange':
                $orange++;
                break;
            case 'sfr':
                $sfr++;
                break;
            case 'free':
                $free++;
                break;
        }
    }
}
echo 'total --->' .$total ."\n";
echo "Orange représente : " . ($orange *100)/$total. ' %'."\n";
echo "SFR représente : " . ($sfr *100) /$total. ' %'."\n";
echo "Free représente : " . ($free*100)/$total . ' %'."\n";




