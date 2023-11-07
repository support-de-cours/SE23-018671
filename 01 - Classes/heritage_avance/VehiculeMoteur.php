<?php 

abstract class VehiculeMoteur extends Vehicule implements MoteurInterface
{
    protected bool $isStarted = false;

    public function isStarted(): string 
    {
        return $this->isStarted ? "Yes" : "No";
    }
}