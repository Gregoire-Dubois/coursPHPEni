<?php

$identifiant = $_POST['identifiant'];

$marque = $_POST['marque'];

$modele = $_POST['modele'];

$identifiant = $_POST['identifiant'];
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$energie = '';

if (isset($_POST['energy'])) {
    $energie = $_POST['energy'];
}

echo $identifiant . ' ' . $marque . ' ' . $modele . ' ' . $energie;

echo $identifiant . $marque. $energie;

/*
 * INSERT INTO modeles(id_modele, marque, modele, carburant)
VALUES('TES_LA', 'TESPLULA', 'JADORE', 'electrique');
 */