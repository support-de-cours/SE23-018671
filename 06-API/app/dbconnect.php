<?php 

// Gestion de la connexion BDD

// DSN Phrase
// -- 

$dsn = DB_DRIVER.":";
$dsn.= "host=".DB_HOST.";";
$dsn.= "port=".DB_PORT.";";
$dsn.= "dbname=".DB_NAME.";";
$dsn.= "charset=".DB_CHARSET.";";


// DB Connect (PDO)
// --

try {
    $db = new \PDO($dsn, DB_USER, DB_PASS);
}
catch(\PDOException $e) 
{
    throw new Exception("Échec de la connexion",  $e->getCode());
}