<?php 

function dump(mixed $data, bool $withType=false)
{
    echo "<pre>";
    $withType ? var_dump($data) : print_r($data);
    echo "</pre>";
}

// Definition de la source
$source = "users.json";

// Lecture des données du fichier source
$file_contents = file_get_contents($source);
// dump(gettype($file_contents));
// dump($file_contents);

// Convertion de la chaine JSON de la source vers un objet PHP
$data = json_decode($file_contents);
// dump(gettype($data));
// dump($data);

// Recupération du tableau d'utilisateurs
$users = $data?->users;
// $users = (object) [];
// if ($data !== null)
// {
//     $users = $data->users;
// }
// dump(gettype($users));
// dump($users);

// Test si $users est un tableau ou u NULL
// Si $users est NULL on defini $isers comme etant un tableau vide
// Le tableau vide permet d'evité une erreur sur le foreach($users)
$users = is_array($users) ? $users : [];
// if (!is_array($users))
// {
//     $users = [];
// }
// dump(gettype($users));

?>

<table>
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>PP</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->firstname ?></td>
            <td><?= $user->lastname ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->{'profile-picture'} ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>