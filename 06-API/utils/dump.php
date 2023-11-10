<?php 

if (!function_exists('dump')) 
{
    function dump(mixed $data, bool $withType=false)
    {
        echo "<pre>";
        $withType ? var_dump($data) : print_r($data);
        echo "</pre>";
    }
}

if (!function_exists('dd')) 
{
    function dd(mixed $data, bool $withType=false)
    {
        dump($data, $withType);
        exit;
    }
}