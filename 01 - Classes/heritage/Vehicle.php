<?php 

// visibility protected


abstract class Vehicle
{
    const ENGINE = "Diesel";
    private string $brand;

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
}