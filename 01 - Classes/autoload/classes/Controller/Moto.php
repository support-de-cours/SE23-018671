<?php 

namespace Controller;

use Abstract\VehiculeMoteur;

class Moto extends VehiculeMoteur
{
    const ROUES = 2;

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