<?php

function dumpVariable ($variable) {
    $type = gettype($variable);
    if ($type === 'integer' || $type === 'float' || $type === 'double') {
        var_dump($variable);
    } else {
        echo $type;
    }
}

dumpVariable([1,2,3]);