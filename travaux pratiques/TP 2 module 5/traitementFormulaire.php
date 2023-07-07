<?php
// récupération des données issues du formulaire
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

// partie PDO

$dsn = 'mysql:host=localhost:8889;dbname=tp;charset=utf8';
$user = 'root';
$pass = 'root';

try {
    // connexion à la base de données
    $pdo = new PDO($dsn, $user, $pass);
    $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //préparation de la requete
    $sqlQuery = 'INSERT INTO modeles(id_modele, marque,modele,carburant) 
                 VALUES(:identifiant, :marque, :modele, :energie);';

    $prep = $pdo->prepare($sqlQuery);
    $prep-> bindValue(':identifiant', $identifiant);
    $prep -> bindValue(':marque', $marque);
    $prep -> bindValue(':modele', $modele);
    $prep-> bindValue(':energie', $energie);

    $prep->execute();
    echo "fin de l'écriture en BDD";

}catch (PDOException $e){
    die('erreur : ' . $e-> getMessage());
}
