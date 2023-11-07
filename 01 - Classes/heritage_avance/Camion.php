<?php 

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