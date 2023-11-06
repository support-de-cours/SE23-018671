<?php 

require_once "MaClasse.php";
require_once "MaClasse.php";

// Instance de l'objet "$monObjet" depuis le modele "MaClasse"
$monObjet = new MaClasse;

echo $monObjet->maSecondePropriete;
echo "<br>";

echo $monObjet->maTroisiemePropriete;
echo "<br>";
echo "<hr>";



$monObjet->maSecondePropriete = "Une valeur";
echo $monObjet->maSecondePropriete;
echo "<br>";


$monObjet->maTroisiemePropriete = "My third property !";
echo $monObjet->maTroisiemePropriete;
echo "<br>";

echo "<hr>";
$monObjet->maPremiereMethode();

$monObjet->maSecondeMethode("truc", 42);

echo "<hr>";
echo $monObjet->maTroisiemeMethode();
echo "<hr>";

echo "Suite du programme";