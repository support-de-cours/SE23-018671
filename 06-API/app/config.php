<?php 

// Centralisation des element de config de l'app 

// Config files paths
// --

$config_route     = "./../config/routes.php";
$config_cache     = "./../config/cache.php";
$config_database  = "./../config/database.php";
$config_templates = "./../config/templates.php";
$config_utils     = "./../config/utils.php";


// Config files checking
// --

if (!file_exists($config_route))
{
    throw new \Exception("Le fichier de configuration des routes est manquant", 01);
}

if (!file_exists($config_cache))
{
    throw new \Exception("Le fichier de configuration des caches est manquant", 02);
}

if (!file_exists($config_database))
{
    throw new \Exception("Le fichier de configuration de base de données est manquant", 03);
}

if (!file_exists($config_templates))
{
    throw new \Exception("Le fichier de configuration des templates est manquant", 04);
}

if (!file_exists($config_utils))
{
    throw new \Exception("Le fichier de configuration des utilitaires est manquant", 05);
}


// Config files imports
// --

require_once("./../config/routes.php");
require_once("./../config/cache.php");
require_once("./../config/database.php");
require_once("./../config/templates.php");
require_once("./../config/utils.php");