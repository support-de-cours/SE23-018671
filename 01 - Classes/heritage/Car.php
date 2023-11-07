<?php 

class Car extends Vehicle
{
    const WHEELS = 4;

    public function getBrand(bool $fromParent=false): string
    {
        if ($fromParent)
        {
            return parent::getBrand();
        }
        else
        {
            return "AZERTYUIO";
        }
    }
}