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

$sql = "SELECT `firstname`, `lastname`, `email` FROM `user` WHERE `id`=:id";
$query = $pdo->prepare($sql);
$query->bindParam(":id", $id);
$query->execute();
$result = $query->fetch(\PDO::FETCH_OBJ);


$formSubmitted = false;
$firstname = $result->firstname;
$lastname = $result->lastname;
$email = $result->email;



// 4- Traitement des données du formulaire
// --


// Creation du token CSRF 
if (!isset($_SESSION['CSRF_TOKEN']))
{
    $uniqid = uniqid();
    $md5 = md5($uniqid);

    $_SESSION['CSRF_TOKEN'] = $md5;
}

// 4.1- Test la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isValidCrsfToken())
{
    $formSubmitted = true;
} 


if ($formSubmitted)
{
    // 4.2- Recupération des données formulaire
    // --
    $errors = [];

    $firstname = $_POST['firstname'] ?? null;
    $lastname  = $_POST['lastname'] ?? null;
    $email     = $_POST['email'] ?? null;

    // dump($firstname);
    // dump($lastname);
    // dump($email);
    // dump($password);


    // 4.3- Verification des données
    // --

    // Control de firstname
    if (empty($firstname))
    {
        array_push($errors, [
            'property' => "firstname",
            'message' => "Champ firstname obligatoire"
        ]);
    }
    // else if (!preg_match("/^[a-z]+$/i", $firstname))
    // {
    //     echo "Champ nom valide";
    // }

    // Control de lastname
    // .. 

    // Control de email
    // .. 

    // Control de password
    // .. 



    // 4.4- Ajout des données dans la BDD
    if (empty($errors))
    {
        // Enregistre en BDD
        echo "SAVE TO BDD";

        unset($_POST['crfs_token']);
        unset($_POST['terms']);
        $_POST['birthday'] = date("Y-m-d");
        // dump($_POST);


        // $columns = "`".implode("`,`", array_keys($_POST))."`";
        // $pdo_keys = ":".implode(",:", array_keys($_POST));

        // dump($_POST);
        // exit;

        $columns = '';
        foreach ($_POST as $key => $value)
        {
            $columns.= empty($columns) ? null : ", ";
            $columns.= "`$key`=:$key";
        }

        $sql = "UPDATE `user` SET $columns WHERE `id`=:id";
        // dump($sql);
        // exit;
    

        // Prepare la requete
        $query = $pdo->prepare($sql);
        $query->bindParam(":id", $id);
        foreach ($_POST as $key => $value)
        {
            $query->bindValue(":".$key, $value);
        }

        // Execution de la requete
        $query->execute();


        // Suppression du token CSRF
        unset($_SESSION['CSRF_TOKEN']);


        $url = "http://site.com/user?id=".$id;
        dump($url);
        exit;
    }
    else 
    {
        echo "ERREURS !!";
        dump($errors);
    }
}




// 3- Affichage du formulaire
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    
    <form method="POST" novalidate>

        <input type="hidden" name="crfs_token" value="<?= $_SESSION['CSRF_TOKEN'] ?? null ?>">

        <!-- Firstname -->
        <div>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" value="<?= $firstname ?>">
        </div>

        <!-- Lastname -->
        <div>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" value="<?= $lastname ?>">
        </div>

        <!-- Email -->
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= $email ?>">
        </div>


        <button type="submit">Send</button>
    </form>

</body>
</html>