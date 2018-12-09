<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 28.11.2018 г.
 * Time: 23:49
 */
$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October','November', 'December' ];
$n = intval(readline());

if ($n > 0 && $n <= 12) {
    echo $months[$n -1];
} else {
    echo 'Invalid Month!';
}
