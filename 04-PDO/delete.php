<?php 
session_start();


function isValidCrsfToken(): bool
{
    if (!isset($_SESSION['CSRF_TOKEN']))
    {
        return true;
    }

    $token = $_POST['crfs_token'] ?? null;
    return $token === $_SESSION['CSRF_TOKEN'];
}



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
// dump($result);



// 4- Traitement de la suppression
// --

// Creation du token CSRF 
if (!isset($_SESSION['CSRF_TOKEN']))
{
    $uniqid = uniqid();
    $md5 = md5($uniqid);

    $_SESSION['CSRF_TOKEN'] = $md5;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isValidCrsfToken())
{
    // Suppression
    $sql = "DELETE FROM `user` WHERE `id`=:id";
    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $id); 
    $query->execute();

    // Confirmation de suppression
    $sql = "SELECT `id` FROM `user` WHERE `id`=:id";
    $query = $pdo->prepare($sql);
    $query->bindParam(":id", $id); 
    $query->execute();
    $result = $query->fetch(\PDO::FETCH_OBJ);

    $isDeleted = !$result;

    // dump($result, true);
    // dump($isDeleted, true);
    dump("Utilisateur supprimé ? ". ($isDeleted ? "oui" : "non"));

    // echo "Suppresion de ".$result->email;
    exit;
} 
?>

<div>Firstname : <?= $result->firstname ?></div>
<div>Lastname : <?= $result->lastname ?></div>
<div>Id : <?= $result->id ?></div>
<div>Email : <?= $result->email ?></div>

<hr>
<form method="POST">
    <input type="hidden" name="crfs_token" value="<?= $_SESSION['CSRF_TOKEN'] ?? null ?>">
    Confirmer la suppression de l'utilisateur  <?= $result->email ?> ?
    <br>
    <a href="read.php?id=<?= $id ?>">non</a>
    <button type="submit">oui</button>
</form>