<?php 

function dump(mixed $data, bool $withType=false)
{
    echo "<pre>";
    $withType ? var_dump($data) : print_r($data);
    echo "</pre>";
}


// DATABASE CONFIG
// --

// Driver / Type de base de donnée
// mysql; pgsql; sqlite;
$driver = "mysql"; 

// Host / Adresse du serveur BDD
$host = "127.0.0.1";

// Port
$port = "3306";

// User
$user = "osw3"; //"root";

// Password
$pass = "myosw3sql"; // "";

// Nom de la base de donnée
$dbname = "db_demo";

// Charset
$charset = "utf8mb4";




// PHRASE DSN
// --

$dsn = $driver.":";
$dsn.= "host=".$host.";";
$dsn.= "port=".$port.";";
$dsn.= "dbname=".$dbname.";";
$dsn.= "charset=".$charset.";";
// echo $dsn;




// PDO CONNECT
// --

try {
    $pdo = new \PDO($dsn, $user, $pass);
} 
catch(PDOException $e)
{
    echo "Pas de connexion à la base de données<br>";
    echo $e->getMessage()."<br>";
    echo $e->getCode()."<br>";
    exit;
}

