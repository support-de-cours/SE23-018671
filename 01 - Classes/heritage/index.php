<?php 
require_once "Vehicle.php";
require_once "Car.php";
require_once "Bike.php";

$car = new Car("Ford");
$bike = new Bike("Triumph");
?>

<div><?= $car->getBrand(true) ?></div>
<div><?= $car->getWheels() ?></div>

<div><?= $car->start() ?></div>
<div><?= $car->accelerate() ?></div>
<div><?= Car::ENGINE ?></div>
<hr>
<div><?= $bike->getBrand() ?></div>
<div><?= $bike->getWheels() ?></div>
<div><?= Bike::ENGINE ?></div>

