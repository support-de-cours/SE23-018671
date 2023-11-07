<?php 

interface MoteurInterface 
{
    public function start(): static;
    public function stop(): static;
}