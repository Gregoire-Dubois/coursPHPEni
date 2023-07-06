<?php


$dsn = 'mysql:host=localhost:8888/phpMyAdmin/db_structure.php?db=tp;charset=utf8';
$username = 'root';
$password = 'GregD2021$';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données.";

    $id = 1;
    $query = 'SELECT * FROM cartesgrises';
    $arr = $pdo -> query($query)->fetch();
    var_dump($arr);

    echo $arr;

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}


/*
 * try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données.";
    $query = "SELECT * FROM tp";

    $stmt = $dpo -> query($query);
    $arrAll = $stmt -> fetchAll();
    var_dump($arrAll);

    for ($i = 0; $i < count(); $i++){
        echo '--> ' . $arrAll[$i];

    }

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
 *
 */