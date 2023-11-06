<?php 

require_once "MaClasse.php";
require_once "MaClasse.php";

// Instance de l'objet "$monObjet" depuis le modele "MaClasse"
$monObjet = new MaClasse;

echo $monObjet->maTroisiemePropriete;
echo "<br>";

echo gettype($monObjet->maTroisiemePropriete);
echo "<br>";
echo gettype($monObjet->ma_premiere_propriete);
echo "<br>";
echo gettype($monObjet->maSecondePropriete);
echo "<br>";

echo "Suite du programme";
