<?php 

// Adresse du fichier de cache
$cache_file = "../cache/page-1.html";


// 1. ouverture du tampon (Output Buffering)
ob_start(); 


// 2. Rendu à mettre en cache
echo date("H:i:s");
echo "<br>";
echo 'Contenu de la page en cache';


// 3. stockage du tampon dans une chaîne de caractères
$cache = "Dans le buffer<br>";
$cache.= ob_get_contents(); 

file_put_contents($cache_file, $cache); //pour une meilleure organisation, on créera un répertoire cache pour y stocker les fichiers du cache



// 4. fermeture de la tamporisation de sortie et ...
ob_end_clean(); // ... effacement du tampon
// ob_end_flush(); // ... affichage du tampon
