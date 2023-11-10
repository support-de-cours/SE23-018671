<?php 

header("Content-Type: text/plain");

$str = "J'aime les ";
$fruits = [
    'Pommes',
    'poires',
    'banaes',
];


// foreach ($fruits as $fruit)
// {
//     echo $str.$fruit."\n";
// }


// array_walk($fruits, function($fruit) {
//     global $str;
//     echo $str.$fruit."\n";
// });



array_walk($fruits, function($fruit) use ($str) {
    echo $str.$fruit."\n";
});



print_r( $fruits );