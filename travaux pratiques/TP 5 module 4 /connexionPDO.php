<?php

$dsn = 'mysql:host=localhost:8889;dbname=tp;charset=utf8';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $options=[
        PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
        PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
    ];

    echo 'test2';

    $sqlQuery = 'SELECT * FROM voitures';
    $recipesStatement  = $pdo->prepare($sqlQuery);
    $recipesStatement ->execute();
    $recipes = $recipesStatement->fetchAll();

    foreach ($recipes as $recipe){
        var_dump($recipe);
    }


} catch (PDOException $e) {
    echo "";
    echo "Erreur de connexion : " . $e->getMessage() . "\n";
    die('erreur : ' .$e-> getMessage());
}
