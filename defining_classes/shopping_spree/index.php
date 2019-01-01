<?php

include_once 'Person.php';
include_once 'Product.php';

$people = [];
$products = [];

$personsInfo = explode(';', readline());
$productsInfo = explode(';', readline());

foreach ($personsInfo as $personInfo) {
    if (strpos($personInfo, '=') !== false) {
        $person = explode('=', $personInfo);
        $name = $person[0];
        $money = (int)$person[1];

        try {
            $people[$name] = new Person($name, $money);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
}

foreach ($productsInfo as $productInfo) {
    if (strpos($productInfo, '=') !== false) {
        $product = explode('=', $productInfo);
        $name = $product[0];
        $price = (int)$product[1];

        $products[$name] = new Product($name, $price);
    }
}

while (1) {
    $line = readline();

    if ($line === 'END') {
        break;
    }

    $personProduct = explode(' ', $line);
    $personName = $personProduct[0];
    $productName = $personProduct[1];

    $person = $people[$personName];
    $product = $products[$productName];

    $person->addProduct($product);
}

foreach ($people as $person) {
    echo $person;
}
