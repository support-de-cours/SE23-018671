<?php 

// class MyClass 
// {
//     public string $brand;
// }

// class MyClass 
// {
//     private string $brand;

//     public function __construct(string $brand)
//     {
//         $this->brand = $brand;
//     }

//     public function getBrand():string 
//     {
//         return $this->brand;
//     }
// }


// PHP 8.1
// class MyClass 
// {
//     public readonly string $brand;
//     public readonly string $model;
//     public readonly string $color;

//     public function __construct(string $brand)
//     {
//         $this->brand = $brand;
//     }
// }


// PHP 8.2
readonly class MyClass 
{
    public string $brand;
    public string $model;
    public string $color;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    // public function setBrand(string $brand): static
    // {
    //     $this->brand = $brand;
    //     return $this;
    // }
}

$myObject = new MyClass("AZERTYU");

echo $myObject->brand."<br>";