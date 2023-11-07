<?php 

namespace Abstract;

use Abstract\Vehicule;
use Interfaces\MoteurInterface;

abstract class VehiculeMoteur extends Vehicule implements MoteurInterface
{
    protected bool $isStarted = false;

    public function isStarted(): string 
    {
        return $this->isStarted ? "Yes" : "No";
    }
}