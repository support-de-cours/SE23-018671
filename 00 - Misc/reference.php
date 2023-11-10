<?php 

header("Content-Type: text/plain");

$fruits = [
    'Pommes',
    'poires',
    'banaes',
];

function arrayToUpper(array &$array): array
{
    foreach ($array as $key => $value)
    {
        $array[$key] = strtoupper($value);
    }
    return $array;
}

arrayToUpper($fruits);

print_r($fruits);