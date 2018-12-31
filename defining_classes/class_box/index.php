<?php

include_once 'Box.php';

$a = (float)readline();
$b = (float)readline();
$c = (float)readline();

$box = new Box($a, $b, $c);
echo $box;