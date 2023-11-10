<?php 

// Definition du namespace, premiere chose à faire
namespace MyNamespace;

use MaClass;

header("Content-Type: text/plain");

#[\Attribute]
class MonAttribut {
    public $valeur;

    public function __construct($valeur) {
        $this->valeur = $valeur;
    }
}

#[MonAttribut("Valeur de l'attribut")]
class MaClasse {

    /**
     * Ma propriété 
     * 
     * @MonAttribut("Valeur de la propriété")
     */
    #[MonAttribut("Valeur de la propriété")]
    public $maPropriete;
    private $uneAutrePropriete;

    public function doSomething(){}
    private function doNothing(){}
}


// Reflection
$reflectionClass = new \ReflectionClass(MaClasse::class);

#region: reflexion

// Nom de la class
$className = $reflectionClass->getName();
echo "Nom de la classe : $className";
echo "\n";
echo "Nom de la classe : ". MaClasse::class;
echo "\n\n";


// Verification de l'instanciabilité de la class
if ($reflectionClass->isInstantiable()) {
    echo "La classe peut être instanciée.";
} else {
    echo "La classe ne peut pas être instanciée.";
}
echo "\n\n";


// Liste des methodes
$methods = $reflectionClass->getMethods();
foreach ($methods as $method) {
    echo "Nom de la méthode : " . $method->getName() . "\n";
}
echo "\n\n";

// Test l'existance d'une methode
if (method_exists(MaClasse::class, 'doSomething'))
{
    echo "La méthode doSomethig existe\n";
}
echo "\n\n";



// Liste des Propriété
$properties = $reflectionClass->getProperties();
foreach ($properties as $property) {
    echo "Nom de la propriété : " . $property->getName() . "\n";
}
echo "\n\n";


// Vérifier la visibilité d'une méthode
$method = $reflectionClass->getMethod('doSomething');
if ($method->isPublic()) {
    echo "La méthode est publique.";
} elseif ($method->isPrivate()) {
    echo "La méthode est privée.";
} elseif ($method->isProtected()) {
    echo "La méthode est protégée.";
}
echo "\n\n";




// Liste des Attribute
$attributes = $reflectionClass->getAttributes();
foreach ($attributes as $attribute) {
    echo "Nom de l'attribute : " . $attribute->getName() . "\n\n";
}
echo "\n\n";



// -------

#endregion: reflexion

// Recupère l'attribut "MonAttribut (#[MonAttribut("Valeur de l'attribut")])" de la class "MaClasse"
$classAttributes = $reflectionClass->getAttributes(MonAttribut::class);

// Instance de la class "MonAttribut"
// + recupération de la propriété "$valeur"
$classAttributeValue = $classAttributes[0]->newInstance()->valeur;

// Recupération de le definition de "$maPropriete" de la class "MaClasse"
$property = $reflectionClass->getProperty('maPropriete');

// Recupération de l'attribut "MonAttribut" de la propriété "$maPropriete"
$propertyAttributes = $property->getAttributes(MonAttribut::class);

// Recupération de la valeur de "MaClasse -> $maPropriete -> MonAttribut -> $valeur"
$propertyAttributeValue = $propertyAttributes[0]->newInstance()->valeur;


echo "Valeur de l'attribut de classe : $classAttributeValue\n";
echo "Valeur de l'attribut de propriété : $propertyAttributeValue\n";

$c = new MaClasse;
echo $c->maPropriete;


// comment 
/* 

comment

*/

/**
 * Comment
 */

# comment