<?php
session_start();

function isValidCrsfToken(): bool
{
    // Test si on a besoin de valider le token
    if (!isset($_SESSION['CSRF_TOKEN']))
    {
        return true;
    }

    // Recup le token du formulaire
    $token = $_POST['crfs_token'] ?? null;

    // Retourne la valeur logique
    // Token du form === Token de session
    return $token === $_SESSION['CSRF_TOKEN'];
}


// Structure du fichier
// --
// 1- Connection à la BDD
// 2- Traitement des données du formulaire
// 3- Affichage du formulaire




// 1- Connection à la BDD
// --

require_once "connect.php";


// 2- Traitement des données du formulaire
// --


// Creation du token CSRF 
if (!isset($_SESSION['CSRF_TOKEN']))
{
    $uniqid = uniqid();
    $md5 = md5($uniqid);

    $_SESSION['CSRF_TOKEN'] = $md5;
}



$formSubmitted = false;
$firstname = null;
$lastname = null;
$email = null;



// 2.1- Test la soumission du formulaire
// if (isset($_POST['submit_my_form']))
// {
//     $formSubmitted = true;
// }
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isValidCrsfToken())
{
    $formSubmitted = true;
} 


if ($formSubmitted)
{
    // 2.2- Recupération des données formulaire
    // --
    $errors = [];

    $firstname = $_POST['firstname'] ?? null;
    $lastname  = $_POST['lastname'] ?? null;
    $email     = $_POST['email'] ?? null;
    $password  = $_POST['password'] ?? null;

    // dump($firstname);
    // dump($lastname);
    // dump($email);
    // dump($password);


    // 2.3- Verification des données
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



    // 2.4- Ajout des données dans la BDD
    if (empty($errors))
    {
        // Enregistre en BDD
        echo "SAVE TO BDD";

        unset($_POST['crfs_token']);
        unset($_POST['terms']);
        $_POST['birthday'] = date("Y-m-d");
        dump($_POST);


        // $sql = "INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`, `birthday`) VALUES (\"".$firstname."\", \"".$lastname."\",  \"".$email."\", \"".$password."\", \"".$birthday."\")";


        // CREATION DES COLONES
        // --

        // $columns = "";

        // foreach ($_POST as $key => $value)
        // {
        //     $columns.= !empty($columns) ? ",":null;
        //     $columns.= "`".$key."`";
        // }

        // $columns = [];
        // foreach ($_POST as $key => $value)
        // {
        //     array_push($columns, $key);
        // }
        // $columns = "`".implode("`,`", $columns)."`";

        $columns = "`".implode("`,`", array_keys($_POST))."`";



        // CREATION DES VAEURS
        // --

        $pdo_keys = "";

        foreach ($_POST as $key => $value)
        {
            $pdo_keys.= !empty($pdo_keys) ? ",":null;
            // $values.= "\"".$value."\"";
            $pdo_keys.= ":".$key;
        }



        $sql = "INSERT INTO `user` (".$columns.") VALUES ($pdo_keys)";
        // dump($sql);




        // Prepare la requete
        $query = $pdo->prepare($sql);

        foreach ($_POST as $key => $value)
        {
            $query->bindValue(":".$key, $value);
        }

        // Execution de la requete
        $query->execute();

        // Retrouve l'ID du dernier enregistyrement
        $id = $pdo->lastInsertId();

        $url = "http://site.com/user?id=".$id;
        dump($url);


        // Suppression du token CSRF
        unset($_SESSION['CSRF_TOKEN']);

        // Redirige l'utilisateur
        // header("location: http://site.com/user?id=42");
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

        <!-- Password -->
        <div>
            <label for="password">New Password</label>
            <input type="password" name="password" id="password">
        </div>

        <!-- Birthday -->
        <div>
        </div>

        <!-- Terms -->
        <div>
            <label>
                <input type="checkbox" name="terms"> I agree with terms
            </label>
        </div>


        <button type="submit">Send</button>
    </form>

</body>
</html>