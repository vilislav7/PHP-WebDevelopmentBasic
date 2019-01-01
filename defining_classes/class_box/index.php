<?php

include_once 'Box.php';

$a = (float)readline();
$b = (float)readline();
$c = (float)readline();

try {
    $box = new Box($a, $b, $c);
    echo $box;
} catch (Exception $e) {
    echo $e->getMessage();
}