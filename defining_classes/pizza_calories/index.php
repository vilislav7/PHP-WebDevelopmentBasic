<?php

require_once 'Pizza.php';

$pizzaInfo = explode(' ', readline());
[$type, $pizzaName, $toppingSize] = $pizzaInfo;
$doughInfo = explode(' ', readline());
[$type, $doughType, $doughBakingTechnique, $doughWeigh] = $doughInfo;

try {
    $pizza = new Pizza($pizzaName, $toppingSize);
    $dough = new Dough($doughType, $doughBakingTechnique, $doughWeigh);

    $pizza->addDough($dough);

    for ($i = 0; $i<$toppingSize; $i++){
        $toppingInfo = explode(' ',readline());
        [$type, $toppingName, $toppingWeigh] = $toppingInfo;
        $topping = new Topping($toppingName, $toppingWeigh);

        $pizza->addTopping($topping);
    }

    echo $pizza;

} catch (Exception $e) {
    echo $e->getMessage();
}

