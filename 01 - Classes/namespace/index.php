<?php 

include "namespace_global.php";
include "namespace_custom.php";

use \Custom\ClassB;
use \ClassC as MyGlobalClassC;
use \Custom\ClassC as MyCustomClassC;

$myFirstObject = new ClassA;
$mySecondObject = new \ClassA;
$myThirdObject = new \Custom\ClassA;

$myFourthObject = new \Custom\ClassB;
$myFifthObject = new ClassB;
$my6Object = new MyGlobalClassC; // Global
$my7Object = new MyCustomClassC; // Custom

?>

<h2>ClassA - Global</h2>
<div><?= $myFirstObject->info ?></div>
<div><?= $mySecondObject->info ?></div>
<div><?= $myThirdObject->info ?></div>
<div><?= $myFourthObject->info ?></div>
<div><?= $myFifthObject->info ?></div>
<div><?= $my6Object->info ?></div>
<div><?= $my7Object->info ?></div>