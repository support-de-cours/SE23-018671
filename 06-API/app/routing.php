<?php 

// Gestion du routage
// -> recupere l'url de l'app
// -> retrouve les données de routage associées à l'URL


// 1- URI par défaut
// --

$uri = "/";


// 2- Récupération de l'URI du navigateur
// --

if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI']))
{
    $uri = $_SERVER['REQUEST_URI']; 
}

if (!str_starts_with($uri, "/"))
{
    $uri = "/".$uri;
}



// 3- Retrouve le "path" dans la table ROUTES
// --

foreach (ROUTES as $route)
{
    // Sort de l'iteration si route 404
    if ($route['name'] === 'error:404')
    {
        continue;
    }

    // Test si le path n'est pas définie
    if (!isset($route['path']) || empty($route['path']))
    {
        throw new \Exception(sprintf("Le path de la route %s est manquant", $route['name']));
    }

    // Test si le path n'est pas une chaine
    if (!is_string($route['path']))
    {
        throw new \Exception(sprintf("Le path de la route %s doit etre une chaine de caractères", $route['name']));
    }

    // Convertion de la chaine en exprsession reguliéres
    //  "/books/{id}" -> "/books/\.+"
    $pattern = strToRegex("/", $route['path']);

    if (preg_match("@^".$pattern."$@", $uri))
    {
        break;
    }
}

