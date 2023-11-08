<?php 

$str = "hello";

$obj = new stdClass;

$array = [];
$array[$str] = "Bonjour";
// $array[$obj] = "My object";

print_r($array);


$map = new WeakMap;
$map[$obj] = "My object";

print_r($map);