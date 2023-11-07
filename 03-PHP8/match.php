<?php 

$civility = "Ms";



if ($civility === "Mr")
{
    $hello_if = "Hello Mister";
}
else if ($civility === "Ms")
{
    $hello_if = "Hello Miss";
}
else 
{
    $hello_if = "Hello Human";
}

echo $hello_if;
echo "<hr>";


switch ($civility)
{
    case 'Mr': 
        $hello_switch = "Hello Mister";
        break;

    case 'Ms': 
        $hello_switch = "Hello Miss";
        break;

    default: 
        $hello_switch = "Hello Human";
        break;
}

echo $hello_switch;
echo "<hr>";




$hello_match = match($civility)
{
    'Mr' => "Hello Mister",
    'Ms' => "Hello Miss",
    default => "Hello Human"
};

echo $hello_match;
echo "<hr>";