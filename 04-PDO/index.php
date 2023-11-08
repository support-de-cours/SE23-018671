<?php

require_once "connect.php";




// SELECT
// -- 
// index all users 

// Definition de la requete SQL
$sql = "SELECT `firstname`,`lastname` FROM `user`";
// $sql = "SELECT * FROM `user`";

// Injection de la requete dans PDO, puis execution
$query = $pdo->query($sql);

// Récupération des résultats de la requete
// $results = $query->fetchAll(\PDO::FETCH_ASSOC);
$results = $query->fetchAll(\PDO::FETCH_OBJ);

?>

<div>Type de $results : <?= gettype($results) ?></div>
<div>Nombre de resultat : <?= count($results) ?></div>
<div>Dump : <?php dump($results); ?></div>

<hr>
<?php foreach ($results as $row): ?>
    <div><?php dump($row) ?></div>
    <div>Firstname : <?= $row->firstname ?></div>
    <hr>
<?php endforeach; ?>
