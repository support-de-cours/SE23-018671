<?php 

namespace Controller;

use Abstract\VehiculeMoteur;

// Controller\Voiture
class Voiture extends VehiculeMoteur
{
    const ROUES = 4;

    public function start(): static 
    {
        $this->isStarted = true;
        return $this;
    }
    public function stop(): static 
    {
        $this->isStarted = false;
        return $this;
    }
}