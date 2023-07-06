<?php
$choix = filter_input(INPUT_POST, 'choix');
$secureChoice = htmlspecialchars($choix);

if ($secureChoice){
    header('location: ' . $secureChoice . '.php');
    exit();
}
