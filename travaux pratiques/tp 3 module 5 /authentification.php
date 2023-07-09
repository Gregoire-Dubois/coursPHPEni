<?php

// récupération des éléments du formulaire
$numID = $_POST['refClient'];
$nomCient = $_POST['nom'];

$sanitizeId = htmlspecialchars($numID);
$sanitizeNom = htmlspecialchars(strtoupper($nomCient));

// vérifier dans la base si l'ID et le nom correspondent (ou pas)
    //connexion à la base de données
$dsn = 'mysql:host=localhost:8889;dbname=tp;charset=utf8';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // préparation de la requête

    $querySQL = 'SELECT * FROM proprietaires where id_pers = :sanitizeId && nom = :sanitizeNom;';

    $prep = $pdo ->prepare($querySQL);
    $prep-> bindValue(':sanitizeId', $sanitizeId);
    $prep-> bindValue(':sanitizeNom',$sanitizeNom);
    $prep->execute();
    $arr = $prep->fetch();
    // var_dump($arr);

    if ($arr == true && strtoupper($arr['nom']) == strtoupper($sanitizeNom) && $arr['id_pers'] == $sanitizeId) {
        echo 'Personne: ' . $arr['nom'] . ' ' . $arr['prenom'] . ' ' . $arr['id_pers'];
    } else {
        echo 'Erreur: Les informations fournies sont incorrectes.';
    }


}catch (PDOException $exception){
    dir( $exception);
}

// si nom et ID correspondent


    // afficher la page dédiée à la modif des données via formulaire HTML