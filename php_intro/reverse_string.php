<?php

while (1) {
    $line = readline();
    $old_line = $line;

    if ($line === 'end') {
        break;
    }

    $line_length = strlen($line);

    for ($i = 0; $i < $line_length/2; $i++) {
        $temp = $line[$i];
        $line[$i] = $line[$line_length - $i -1];
        $line[$line_length - $i -1] = $temp;
    }

    echo $old_line.' = '.$line.PHP_EOL;
}