<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 30.11.2018 г.
 * Time: 11:17
 */

$str = readline();
$str = str_split($str);
$letter_repetition = [];


foreach ($str as $current_char) {
    if (!array_key_exists($current_char, $letter_repetition)) {
        if (!empty($current_char)) {
            $letter_repetition[$current_char] = 1;
        }
    } else {
        if (!empty($current_char)) {
            $letter_repetition[$current_char] ++;
        }
    }

}

foreach ($letter_repetition as $key => $current_letter) {
    echo $key . ' -> ' . $current_letter . PHP_EOL;
}