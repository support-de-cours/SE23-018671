<?php 

echo 42 + 42;

class MyClass 
{
    // public ?string $nickname = null;
    public string|null $nickname = null;
    public string|int|null $property = null;

    public function doSomething(): string|array|null
    {
        return null;
    }
}

$myObject = new MyClass;

echo $myObject->nickname;