<?php
// Declenche le controller et fait une sortie de php



// Test l'existance de $route
// --

// Test l'existance de $route et que $route possede les propriété necessaire 
// au déclenchement du controller
if (!isset($route) || empty($route))
{
    throw new \Exception(sprintf("Problème sur la definition de la route \"%s\"", $uri));
}

if (!isset($route['controller']) || empty($route['controller']))
{
    throw new \Exception(sprintf("Le controller de la route \"%s\" est manquant", $route['name']));
}

if (!is_string($route['controller']))
{
    throw new \Exception(sprintf("Le controller de la route \"%s\" doit être une chaine", $route['name']));
}



// Recupération des données du controller
// --

// Recuperation de la chaine du controller
// App\Controller\MyClass::method
$controller_string = $route['controller'];

// Convertion de la chaine en tableau
// -> App\Controller\MyClass
// -> method
$controller_array = explode("::", $controller_string);

// Definition de la classe du controller
// -> App\Controller\MyClass
$controller_class = $controller_array[0] ?? null;

// Definition de la classe du controller
// -> method
// -> "index" si la methode n'est pas definie dans la table de routage
$controller_method = $controller_array[1] ?? "index";

if ($controller_class === null)
{
    throw new \Exception(sprintf("Aucun controller n'est defini pour la route %s", $route['name']));
}



// Execution du controller
// --

// Declencement du controller
cache(
    class: $controller_class, 
    method: $controller_method
);