<?php



$num = readline();
$operators = readline();

$operators_arr = explode(', ', $operators);

foreach ($operators_arr as $operator) {
    try {
        $num = x($num, $operator);
        echo $num . PHP_EOL;
    } catch (Exception $e) {
        echo $e;
    }
}

function x (float $num, string $operator) : float {
    switch ($operator) {
        case 'chop' : return $num / 2;
            break;
        case 'dice' : return sqrt($num);
            break;
        case 'spice' : return $num + 1;
            break;
        case 'bake' : return $num * 3;
            break;
        case 'fillet' : return ($num - $num*20/100);
            break;
        default: throw new Exception('Unknown operator');
    }
}