<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 30.11.2018 г.
 * Time: 17:54
 */

function isPalindrome (string $text) :bool {
    $text_as_array = str_split($text);
    $count = count($text_as_array);

    $is_palindrome = true;

    if (empty($text)) {
        $is_palindrome = false;
    } else {
        for ($i = 0; $i < $count/2; $i ++) {
            if ($text_as_array[$i] !== $text_as_array[$count - 1 - $i]) {
                $is_palindrome = false;
            }
        }
    }

    return $is_palindrome;
}

$input = readline();
if (isPalindrome($input)) {
    echo 'true';
} else {
    echo 'false';
}