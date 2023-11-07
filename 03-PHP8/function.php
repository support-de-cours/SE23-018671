<?php 
function user(
    string $firstname,
    string $lastname,
    int $age,
    bool $isActive=false,
)
{
    echo "Firstname : ". $firstname."<br>";
    echo "Lastname : ". $lastname."<br>";
    echo "Age : ". $age."<br>";
}


user("John", "DOE", 42);

user(
    // isActive: true,
    lastname: "DOE", 
    age: 42, 
    firstname: "Bob"
);