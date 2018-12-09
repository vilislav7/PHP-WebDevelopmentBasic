<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 30.11.2018 г.
 * Time: 11:41
 */

$input_string = readline();
$elements = explode(', ', $input_string);

$elements_occurrence = [];

foreach ($elements as $element) {
    if (!array_key_exists($element, $elements_occurrence)) {
        $elements_occurrence[$element] = 0;
    }

    $elements_occurrence[$element] ++ ;
}

foreach ($elements_occurrence as $element => $occurrence) {
    if ($occurrence === 1) {
        echo $element.' ';
    }
}