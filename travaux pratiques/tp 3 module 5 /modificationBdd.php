<?php

// initialisation des variables pour récupérer les donées du formulaire
$refpersonne = htmlspecialchars($_POST['refClient']);
$sanitizeNom = htmlspecialchars($_POST['nom']);
$sanitizePrenom = htmlspecialchars($_POST['prenom']);
$sanitizeAdresse = htmlspecialchars($_POST['adresse']);
$sanitizeCp = htmlspecialchars($_POST['cp']);
$sanitizeVille = htmlspecialchars($_POST['ville']);

//connexion à la base de données
$dsn = 'mysql:host=localhost:8889;dbname=tp;charset=utf8';
$user = 'root';
$pass = 'root';

try {

    $pdo = new PDO($dsn, $user, $pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // préparation de la requête de modification dans la Bdd

    $sqlQuery = 'UPDATE proprietaires
    SET adresse = :sanitizeAdresse, nom = :sanitizeNom, prenom = :sanitizePrenom, ville = :sanitizeVille, codepostal = :sanitizeCp
    WHERE id_pers = :numID';

    $prep = $pdo->prepare($sqlQuery);
    $prep->bindValue(':sanitizeAdresse', $sanitizeAdresse);
    $prep->bindValue(':sanitizeNom', $sanitizeNom);
    $prep->bindValue(':sanitizePrenom', $sanitizePrenom);
    $prep->bindValue(':sanitizeVille', $sanitizeVille);
    $prep->bindValue(':sanitizeCp', $sanitizeCp);
    $prep->bindValue(':numID', $refpersonne);
    $prep->execute();

    echo "Modification terminée";

}catch (PDOException $exception){
    dir($exception->getMessage());
}

// input hiden