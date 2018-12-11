<?php

$input = readline();
$input_arr = explode(', ', $input);

$desired_thickness = (int)$input_arr[0];
array_shift($input_arr);

$count = count($input_arr);

for ($i = 0; $i < $count; $i++) {
    $current_thickness = (int)$input_arr[$i];
    reduceThickness($desired_thickness, $current_thickness);
}

function reduceThickness (int $desired, int $current) {
    workFlow($desired, $current);
}

function workFlow (int $desired, int $current) {
    $state = new stdClass();
    $state->cut_times = 0;
    $state->lap_times = 0;
    $state->grind_times = 0;
    $state->etch_times = 0;
    $state->xray_times = 0;
    $state->thickness_begining = $current;
    $state->current = $current;
    $state->desired = $desired;

    while (1) {
        $newThickness = cutCrystal($state->current);
        if ($newThickness >= $state->desired) {
            $state->cut_times ++ ;
            $state->current = $newThickness;
        } else {
            break;
        }
    }
    $state->current = transportingWashing($state->current);
    if ($state->current > $state->desired) {
        while (1) {
            $newThickness = lapCrystal($state->current);
            if ($newThickness >= $state->desired) {
                $state->lap_times++;
                $state->current = $newThickness;
            } else {
                break;
            }
        }
        $state->current = transportingWashing($state->current);
    }

    if ($state->current > $state->desired) {
        while (1) {
            $newThickness = grindCrystal($state->current);
            if ($newThickness >= $state->desired) {
                $state->grind_times ++;
                $state->current = $newThickness;
            } else {
                break;
            }
        }
        $state->current = transportingWashing($state->current);
    }
    if ($state->current > $state->desired) {
        while (1) {
            $newThickness = etchCrystal($state->current);
            if ($newThickness >= $state->desired) {
                $state->etch_times ++;
                $state->current = $newThickness;
            } elseif ($state->current - 1 == $state->desired) {
                $state->etch_times ++;
                $state->xray_times ++;
                $state->current --;
            }elseif ($state->current - 2 == $state->desired) {
                $state->etch_times ++;
                $state->current -= 2;
            } else {
                break;
            }
        }
        $state->current = transportingWashing($state->current);
    }
    echo "Processing chunk $state->thickness_begining microns". PHP_EOL;
    if ($state->cut_times > 0) {
        echo "Cut x$state->cut_times". PHP_EOL;
        echo 'Transporting and washing'.PHP_EOL;

    }
    if ($state->lap_times > 0) {
        echo "Lap x$state->lap_times". PHP_EOL;
        echo 'Transporting and washing'.PHP_EOL;

    }
    if ($state->grind_times > 0) {
        echo "Grind x$state->grind_times". PHP_EOL;
        echo 'Transporting and washing'.PHP_EOL;

    }
    if ($state->etch_times > 0) {
        echo "Etch x$state->etch_times". PHP_EOL;
        echo 'Transporting and washing'.PHP_EOL;

    }
    if ($state->xray_times > 0 && $state->xray_times < 2) {
        echo "X-ray x$state->xray_times". PHP_EOL;
    }
    if ($state->current === $state->desired) {
        echo "Finished crystal $state->current microns".PHP_EOL;
    }
}

function cutCrystal (float $currentThickness) : float {
    return $currentThickness / 4;
}
function lapCrystal (float $currentThickness) : float {
    return $currentThickness - (1/5 * $currentThickness);
}
function grindCrystal (float $currentThickness) : float {
    return $currentThickness - 20;
}
function etchCrystal (float $currentThickness) : float {
    return $currentThickness - 2;
}
function xRayCrystal (float $currentThickness) : float {
    return $currentThickness + 1;
}
function transportingWashing (float $currentThickness) : int {
    return (int)$currentThickness;
}