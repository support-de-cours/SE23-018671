<?php 
header("Content-Type: text/plain");

function fa() 
{
    // Affiche l'arboressence d'appel de fonction / methode / classe
    debug_print_backtrace();

    print_r(debug_backtrace());

    return "Plop";
}
function fb() 
{
    return fa();
}
function fc() 
{
    return fb();
}

echo "\n";
echo fc();
echo "\n";
echo "\n";

echo gettype("Ma chaine");
echo "\n";
echo gettype(true);
echo "\n";
echo gettype([1,3,5]);
echo "\n";
$obj = new stdClass();
echo gettype($obj);
echo "\n";
echo "\n";


class MyClass {}
$myClass = new MyClass;
echo gettype($myClass);
echo "\n";
echo "\n";
var_dump(  $myClass instanceof MyClass  );
echo "\n";
echo "\n";
echo get_debug_type($myClass);
echo "\n";
echo "\n";


var_dump(['azer', 42, false, ['data']]);
print_r(['azer', 42, false, ['data']]);