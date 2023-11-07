<?php 

namespace Controller;

use Abstract\VehiculeMoteur;

class Camion extends VehiculeMoteur
{
    public function start(): static
    {
        return $this;
    }

    public function stop(): static
    {
        // 
        return $this;
    }
}