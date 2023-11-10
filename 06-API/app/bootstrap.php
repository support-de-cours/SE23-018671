<?php

// Timing Script Execution (Start)
$tse_start = microtime(true);

// Demmarage de session $_SESSION
session_start();

// Ajout de l'autoload (PSR-4)
require_once "./../vendor/autoload.php";

try {

    // Procedure d'execution de l'app
    // --

    // 1- Configuration de l'app
    require_once "config.php";

    // 2- Connexion BDD
    require_once "dbconnect.php";

    // 3- Chargement des fonctions "utils"
    require_once "utils.php";

    // 4- Analyse du routage (url > controller)
    require_once "routing.php";

    // 5- Compilation et rendu de l'app
    require_once "execute.php";

}
catch (\Exception $e)
{
    echo 'Message d\'erreur : ' .$e->getMessage();
    echo '<br>';
    echo 'Code d\'erreur : ' .$e->getCode();
}

// Timing Script Execution (End)
$tse_end = microtime(true);

// Calcul le temps d'execution du script
$tse = $tse_end - $tse_start;

echo $tse;