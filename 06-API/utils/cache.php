<?php

if (!function_exists('cache')) 
{
    function cache($class, $method)
    {
        global $uri;
        global $route;

        $hash = md5($uri);
        $file = CACHES_PATH.$hash;

        if (!ALLOW_CACHE)
        {
            // site.com/book/42
            // $params = array_merge([], $route['params']);
            // echo (new $class)->$method($params);

            echo (new $class)->$method(...$route['params']);
            exit;
        }

        if (!file_exists($file) || filemtime($file) < CACHE_EXPIRE)
        {
            ob_start();
            echo (new $class)->$method(...$route['params']);

            $data = ob_get_contents(); 
            file_put_contents($file, $data) ; 
            ob_end_clean();
        }

        readfile($file);
    }
}