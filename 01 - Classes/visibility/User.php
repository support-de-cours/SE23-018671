<?php 

class User 
{
    // PHP 7
    // private string $name;

    // public function __construct(string $name)
    // {
    //     $this->name = $name;
    // }


    // PHP 8
    public function __construct(
        private string $name
    ){
        $this->name = strtoupper($name);
        // $this->name = strtoupper($this->name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    // public function getUpperName(): string
    // {
    //     return strtoupper( $this->getName() );
    // }
}