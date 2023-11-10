<?php 

// Fichier de chargement automatique des script du répertoire "utils"

// Test l'existance du répertoir UTils
if (!is_dir(UTILS_PATH))
{
    $message = sprintf(
        "Le répertoire \"%s\" est manquant.",
        UTILS_PATH
    );

    throw new \Exception($message, 10);
}


// Scan le répertoire UTILS_PATH
$scan = scandir(UTILS_PATH);

array_map(function(string $entry){
    if (str_ends_with($entry, ".php")) 
    {
        include_once UTILS_PATH.$entry;
    }
}, $scan);