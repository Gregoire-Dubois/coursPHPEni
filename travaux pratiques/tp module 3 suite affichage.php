<?php

require_once 'TP du Module 03 suite.php';

$form = new FormSimple('Formulaire de test', '#');
$form ->setText('nom de famille', 'nom');
$form -> setText('prénom', 'prenom');
$form ->setSubmit('Envoyer le formulaire');
echo $form->getForm();
