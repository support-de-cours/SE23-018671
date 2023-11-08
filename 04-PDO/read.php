<?php 

// site.com/read.php?id=42

// 1- Connection à la BDD
// --

require_once "connect.php";



// 2- Recupération de l'id de l'URL
// --

$id = $_GET['id'] ?? null;

if ($id === null)
{
    header("HTTP/1.1 404 Not Found");
    echo "Opps, ressource introvable";
    exit;
}



// 3- Recupération des données en BDD
// --

$sql = "SELECT `id`, `firstname`, `lastname`, `email` FROM `user` WHERE `id`=:id";
$query = $pdo->prepare($sql);

// $query->bindValue(":id", 5); // $id ou 42 
$query->bindParam(":id", $id); // $id mais pas 42

$query->execute();
$result = $query->fetch(\PDO::FETCH_OBJ);

// dump($id);
dump($result);
?>

<div>Firstname : <?= $result->firstname ?></div>
<div>Lastname : <?= $result->lastname ?></div>
<div>Id : <?= $result->id ?></div>
<div>Email : <?= $result->email ?></div>
