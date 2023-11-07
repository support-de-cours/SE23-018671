<?php 
// Registre d'autoload
// --
// dans PHP... puis appel la fonction "my_custom_autoload"
// -> my_custom_autoload(Voiture)


// Ajoute des entré dans le registre d'autoload
// --
function my_custom_autoload(string $entry)
{
    $entry = str_replace("\\", "/", $entry);
    $file = "classes/".$entry.".php";

    // echo "<pre>";
    // print_r("classes/".$entry.".php");
    // echo "</pre>";

    require_once $file;
}
spl_autoload_register("my_custom_autoload");











use Controller\Voiture;
use Controller\Moto;
use Controller\Velo;

$car = new Voiture("Ford");
$moto = new Moto("Triumph");

$velo = new Velo("Peugeot");
unset($velo);

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
