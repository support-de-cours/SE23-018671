<?php

if (!function_exists('cache')) 
{
    function cache($class, $method)
    {
        global $uri;

        $hash = md5($uri);
        $file = CACHES_PATH.$hash;

        if (!ALLOW_CACHE)
        {
            echo (new $class)->$method();
            exit;
        }

        if (!file_exists($file) || filemtime($file) < CACHE_EXPIRE)
        {
            ob_start();
            echo (new $class)->$method();

            $data = ob_get_contents(); 
            file_put_contents($file, $data) ; 
            ob_end_clean();
        }

        readfile($file);
    }
}