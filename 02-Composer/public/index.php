<?php

use App\Controller\Voiture;

require_once "../vendor/autoload.php";

$car = new Voiture("Tesla");

echo $car->getBrand();