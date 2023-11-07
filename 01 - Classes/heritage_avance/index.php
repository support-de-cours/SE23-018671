<?php 

include "MoteurInterface.php";
include "Vehicule.php";
include "VehiculeMoteur.php";
include "VehiculeSansMoteur.php";
include "Voiture.php";
include "Moto.php";
include "Velo.php";


$car = new Voiture("Ford");
$moto = new Moto("Triumph");
$velo = new Velo("Peugeot");

?>

<h2>Voiture</h2>
<div><?= $car->getBrand() ?></div>
<div><?= $car->isStarted() ?></div>
<?php /*$car->start()*/ ?>
<div><?= $car->isStarted() ?></div>

<h2>Moto</h2>
<div><?= $moto->getBrand() ?></div>
<div><?= $moto->isStarted() ?></div>
<div><?= $moto->isStarted() ?></div>

<h2>Velo</h2>
<div><?= $velo->getBrand() ?></div>
