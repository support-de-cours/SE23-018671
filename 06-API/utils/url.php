<?php

if (!function_exists('url')) 
{
    function url(string $routeName, array $params = [], bool $absolute = false): string
    {    
        // Définition de la variable base
        $base = '';
        $path = '/404';
    
        if ($absolute) 
        {
            // Le schema : http ou https
            $scheme = "http";
            if (isset($_SERVER['REQUEST_SCHEME'])) {
                $scheme = $_SERVER['REQUEST_SCHEME'];
            }
            
            // Le domaine : site.com
            $host = "127.0.0.1";
            if (isset($_SERVER['HTTP_HOST'])) {
                $host = $_SERVER['HTTP_HOST'];
            }
        
            // Création de la base de l'adresse absolue
            $base = $scheme."://".$host;
        }
    

        // Recupération du "path" depuis la table de routage
        if (is_array(ROUTES)) 
        {
            foreach (ROUTES as $route) 
            {
                if ($route['name'] == $routeName) 
                {
                    $path = $route['path'];
                    break;
                }
            }
        }


        // Remplacement des patterns de parametres par des valeurs
        $sections = explode("/", $path);
        unset($sections[0]);
    
        $path = [];
        foreach ($sections as $term)
        {
            $isParam = preg_match("/^{(.+)}$/", $term, $param);
            $key = $param[1] ?? null;
            $value = $isParam ? $params[$key] : $term;

            array_push($path, $value);
        }
        $path = "/".implode("/", $path);

        return $base.$path;
    }
}