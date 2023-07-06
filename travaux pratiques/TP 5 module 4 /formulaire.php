<?php
$choix = filter_input(INPUT_POST, 'choix');

if ($choix){
    header('location: ' . $choix . '.php');
    exit();
}
