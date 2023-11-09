<?php

function dump(mixed $data, bool $withType=false)
{
    echo "<pre>";
    $withType ? var_dump($data) : print_r($data);
    echo "</pre>";
}


// Model
// --

// Source des données
$data = [
    "users" => [
        [
            "firstname" => "John",
            "lastname" => "DOE",
            "email" => "john@doe.com",
            "age" => 42,
            "isActive" => true
        ],
        [
            "firstname" => "Jane",
            "lastname" => "DOE",
            "email" => "jane@doe.com",
            "age" => 42,
            "isActive" => true
        ],
        [
            "firstname" => "Bob",
            "lastname" => "DOE",
            "email" => "bob@doe.com",
            "age" => 42,
            "isActive" => false
        ]
    ]
];



// Controller
// --

// Manipulation de la source
$json = json_encode($data);

// dump($data);
// dump(gettype($json));
// dump($json);





// View 
// --

// header("HTTP/1.1 404 Not Found");
header("Content-Type: application/json");
// header("X-Machin: truc");
header_remove("X-Powered-By");
// header("Content-Type: text/json");
echo $json;