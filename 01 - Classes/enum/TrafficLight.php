<?php 
header("Content-Type: text/plain");


// Valeur possible: red, green, orange
// $values = ['red', 'green', 'orange'];

// var_dump(in_array('red', $values));

enum TrafficLight: string
{
    case RED = 'red';
    case GREEN = 'green';
    case ORANGE = 'orange';

    public static function values(string $separator=',', string $start='', string $end=''): string
    {
        $cases = self::cases();
        $map = array_map(fn($case) => $case->name, $cases);
        return $start . implode($separator, $map) . $end;
    }
}

print_r(TrafficLight::cases());
print_r(TrafficLight::from('red'));
var_dump(TrafficLight::tryFrom('black'));

print_r(TrafficLight::values("===", "OOOO", "PPPP"));