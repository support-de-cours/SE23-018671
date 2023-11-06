<?php 

class Voiture 
{
    const WHEELS = 4;

    private string $brand;
    private string $model;
    private string $color;

    public function __construct(string $brand, string $model, string $color="white")
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getBrand(): string 
    {
        return $this->brand;
    }
    public function getModel(): string 
    {
        return $this->model;
    }
    
    public function getColor(): string 
    {
        return $this->color;
    }
    public function setColor(string $color): static 
    {
        $this->color = $color;
        return $this;
    }

    public function getWheels()
    {
        return self::WHEELS;
    }
}

echo "Nombre de roues : ".Voiture::WHEELS;
echo "<hr>";




// Tesla Giga Factory
$laVoitreDeJohn = new Voiture("Tesla", "Model X");


// Ford
$laVoitureDeBob = new Voiture("Ford", "F-150", "red");


$message = sprintf( "Nombre de roues : %s", $laVoitreDeJohn->getWheels());
echo $message;
echo "<hr>";


// Sur le parking du Super U
echo $laVoitreDeJohn->getBrand();
echo "<br>";
echo $laVoitreDeJohn->getModel();
echo "<br>";
echo $laVoitreDeJohn->getColor();
echo "<br>";

$laVoitreDeJohn->setColor('blue');
echo $laVoitreDeJohn->getColor();
echo "<br>";
echo $laVoitreDeJohn->getWheels();
echo "<br>";
echo "<hr>";

echo $laVoitureDeBob->getBrand();
echo "<br>";
echo $laVoitureDeBob->getModel();
echo "<br>";
echo $laVoitureDeBob->getColor();
echo "<br>";
echo $laVoitureDeBob->getWheels();
echo "<br>";
