<?php 

// visibility protected


abstract class Vehicle
{
    const ENGINE = "Diesel";
    protected string $brand;

    private bool $isStarted = false;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getWheels(): int 
    {
        // return 0;
        if (defined('static::WHEELS'))
        {
            return static::WHEELS;
        }
        
        return 0;
    }


    
    public function start()
    {
        $this->changeStartState();
    }
    public function accelerate()
    {
        
    }


    private function changeStartState()
    {
        $this->isStarted = true;
    }
}