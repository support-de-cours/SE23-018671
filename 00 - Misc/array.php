<?php 
header("Content-Type: text/plain");

$fruits = [
    "Pommes",
    "Poires",
    "Bananes",
];




print_r($fruits);

// foreach ($fruits as $key => $fruit)
// {
//     $fruits[$key] = strtoupper($fruit);
// }

// array_walk($fruits, function(&$fruit) {
//     $fruit = strtoupper($fruit);
// });

array_walk($fruits, fn(&$fruit) => $fruit = strtoupper($fruit));
// array_walk([
//     "Pommes",
//     "Poires",
//     "Bananes",
// ], fn(&$fruit) => $fruit = strtoupper($fruit));

print_r($fruits);





function cube($n)
{
    return ($n * $n * $n);
}

$a = [1,2,5,6];
$b = [1,2,3,4];
$c = array_map('cube', $a);
print_r($c);





// $c = array_map(function(){

// }, $a, $b);

// print_r($c);

/*
array_walk(
    array|object &$array, 
    callable $callback, 
    mixed $arg = null
): bool


array_map(
    ?callable $callback, 
    array $array, 
    array ...$arrays
): array
*/


