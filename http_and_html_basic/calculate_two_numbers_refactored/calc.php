<?php

if(isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];
    $output = '';

    echo '<div>';
    if ($operation === 'sum') {
        $output = $num1 + $num2;
    } elseif ($operation === 'subtract') {
        $output = $num1-$num2;
    } else {
        $output = 'Invalid operation supplied';
    }
    echo '</div>';
}

include 'calc_frontend.php';