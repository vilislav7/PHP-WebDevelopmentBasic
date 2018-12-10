<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 1.12.2018 г.
 * Time: 11:18
 */

$speed = intval(readline());
$area = readline();

speedLimit($speed, $area);

function speedLimit (int $speed, string $area) : void {
    $allowed_speed_limit = 0;
    if ($area === 'motorway') {
        $allowed_speed_limit = 130;
    } elseif ($area === 'interstate') {
        $allowed_speed_limit = 90;
    } elseif ($area === 'city') {
        $allowed_speed_limit = 50;
    } elseif ($area === 'residential') {
        $allowed_speed_limit = 20;
    } else {
        echo 'Wrong Format!';
    }
    ckeck_if_speed_limit($speed, $allowed_speed_limit);
}

/**
 * @param int $speed
 * @param int $allowed_speed_limit
 */
function ckeck_if_speed_limit(int $speed,int $allowed_speed_limit): void
{
    if ($speed >= $allowed_speed_limit) {
        if ($speed === $allowed_speed_limit) {
            echo 'speeding';
        } else {
            $diff = $speed - $allowed_speed_limit;
            if ($diff <= 20) {
                 echo 'speeding';
             } elseif ($diff <=40) {
                 echo 'excessive speeding';
             } else {
                 echo 'reckless driving';
             }
         }
    }
}
