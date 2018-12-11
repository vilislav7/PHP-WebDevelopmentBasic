<?php

$arr = [];
while (1) {
    $line = trim(readline());
    if ($line === 'finally') {
        break;
    }
    calculate($line, $arr);
}

$last_line = trim(readline());

array_map(function ($n){
    return (float)$n;
},$arr);

calculate($last_line, $arr, false);

if (count($arr) === 1) {
    echo $arr[0];
} else {
    echo implode(', ', $arr);
}

function calculate(string $operator, &$arr, bool $read_input = true) {
    switch ($operator) {
        case 'sum':{
            sum($arr, $read_input);
        }
            break;
        case 'multiply': {
            multiply($arr, $read_input);
        }
            break;
        case 'divide': {
            divide($arr, $read_input);
        }
            break;
        case 'subtract': {
            subtract($arr, $read_input);
        }
            break;
        case 'factorial': {
            factorial($arr, $read_input);
        }
            break;
        case 'root': {
            root($arr, $read_input);
        }
            break;
        case 'power': {
            power($arr, $read_input);
        }
            break;
        case 'absolute': {
            absolute($arr, $read_input);
        }
            break;
        case 'pythagorean': {
            pythagorean($arr, $read_input);
        }
            break;
        case 'triangleArea': {
            triangleArea($arr, $read_input);
        }
            break;
        case 'quadratic': {
            quadratic($arr, $read_input);
        }
            break;
        default: break;
    }
}

function sum (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();
        $num2 = (float)readline();

        $res = sumNumbers($num1, $num2);

        $arr[] = $res;
    } else {
        $temp = $arr;
        $exception = false;
        while (count($temp) > 1) {
            if (count($temp) >= 2) {
                $num1 = array_shift($temp);
                $num2 = array_shift($temp);
                try {
                    $temp[] = sumNumbers($num1, $num2);
                } catch (Exception $e) {
                    $line = readline();
                    $exception = true;
                    echo $e->getMessage().PHP_EOL;
                    calculate($line,$arr,false);
                }
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}
function multiply (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (double)readline();
        $num2 = (double)readline();

        $arr[] = multiplyNumbers($num1, $num2);
    } else {
        while (count($arr) > 1) {
            if (count($arr) >= 2) {
                $num1 = array_shift($arr);
                $num2 = array_shift($arr);
                $arr[] = multiplyNumbers($num1, $num2);
            } else {
                break;
            }
        }
    }
}
function divide (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();
        $num2 = (float)readline();

        try {
            $arr[] = divideNumbers($num1, $num2);
        } catch (Exception $e) {
            echo $e->getMessage().PHP_EOL;
        }
    } else {
        $exception = false;
        $temp = $arr;
        while (count($temp) > 1) {
            if (count($temp) >= 2) {
                $num1 = array_shift($temp);
                $num2 = array_shift($temp);
                try {
                    $temp[] = divideNumbers($num1, $num2);
                } catch (Exception $e) {
                    $line = readline();
                    $exception = true;
                    echo $e->getMessage().PHP_EOL;
                    calculate($line,$arr,false);
                }
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}
function subtract (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();
        $num2 = (float)readline();

        $arr[] = subtractNumbers($num1, $num2);
    } else {
        while (count($arr) > 1) {
            if (count($arr) >= 2) {
                $num1 = array_shift($arr);
                $num2 = array_shift($arr);
                $arr[] = subtractNumbers($num1, $num2);
            } else {
                break;
            }
        }
    }
}
function factorial (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();

        try {
            $arr[] = factorialOfNumber($num1);

        } catch (Exception $e) {
            $line = readline();
            echo $e->getMessage().PHP_EOL;
            calculate($line,$arr,false);
        }
    } else {
        $count = count($arr);
        $temp = $arr;
        $exception = false;
        for ($i = 0; $i < $count; $i++) {
            try {
                $temp[$i] = factorialOfNumber($temp[$i]);
            } catch (Exception $e) {
                $exception = true;
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}

function root (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();

        try {
            $arr[] = rootNumber($num1);

        } catch (Exception $e) {
            echo $e->getMessage().PHP_EOL;
        }
    } else {
        $count = count($arr);
        $exception = false;
        $temp = $arr;
        for ($i = 0; $i < $count; $i++) {
            try {
                $temp[$i] = rootNumber($temp[$i]);
            } catch (Exception $e) {
                echo $e->getMessage().PHP_EOL;
                $exception = true;
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}
function power (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();
        $num2 = (float)readline();

        $arr[] = powerNumber($num1, $num2);
    } else {
        $temp = $arr;
        $exception = false;
        while (count($temp) > 1) {
            if (count($temp) >= 2) {
                $num1 = array_shift($temp);
                $num2 = array_shift($temp);

                try {
                    $temp[] = powerNumber($num1, $num2);
                } catch (Exception $e) {
                    $line = readline();
                    $exception = true;
                    echo $e->getMessage().PHP_EOL;
                    calculate($line,$arr,false);
                }
            } else {
                break;
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}
function absolute (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();

        $arr[] = abs($num1);
    } else {
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            $arr[$i] = abs($arr[$i]);
        }
    }
}
function pythagorean (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();
        $num2 = (float)readline();

        $arr[] = sqrt($num1*$num1 + $num2*$num2);
    } else {
        $exception = false;
        $temp = $arr;
        while (count($temp) > 1) {
            if (count($temp) >= 2) {
                $num1 = array_shift($temp);
                $num2 = array_shift($temp);

                try {
                    $temp[] = sqrt($num1*$num1 + $num2*$num2);
                } catch (Exception $e) {
                    $line = readline();
                    $exception = true;
                    echo $e->getMessage().PHP_EOL;
                    calculate($line,$arr,false);
                }
            } else {
                break;
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}
function triangleArea (&$arr, $read_input) {
    if ($read_input) {
        $num1 = (float)readline();
        $num2 = (float)readline();
        $num3 = (float)readline();

        $s = ($num1 + $num2 + $num3)/2;

        try {
            $arr[] = sqrt($s * ($s - $num1) * ($s - $num2) * ($s - $num3));
        } catch (Exception $e) {
            echo $e->getMessage().PHP_EOL;
        }
    } else {
        $exception = false;
        $temp = $arr;
        while (count($temp) > 1) {
            if (count($temp) >= 3) {
                $num1 = array_shift($temp);
                $num2 = array_shift($temp);
                $num3 = array_shift($temp);

                try {
                    $s = ($num1 + $num2 + $num3)/2;
                    $temp[] = sqrt($s * ($s - $num1) * ($s - $num2) * ($s - $num3));
                } catch (Exception $e) {
                    $line = readline();
                    $exception = true;
                    echo $e->getMessage().PHP_EOL;
                    calculate($line,$arr,false);
                }
            } else {
                break;
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}
function quadratic (&$arr, $read_input) {
    if ($read_input) {
        $a = (float)readline();
        $b = (float)readline();
        $c = (float)readline();

        try {
            $res = quadraticCompute($a, $b, $c);
            $arr[] = $res;
        } catch (Exception $e) {
            echo $e->getMessage().PHP_EOL;
        }
    } else {
        $exception = false;
        $temp = $arr;
        while (count($temp) > 1) {
            if (count($temp) >= 3) {
                $num1 = array_shift($temp);
                $num2 = array_shift($temp);
                $num3 = array_shift($temp);

                try {
                    $res = quadraticCompute($num1, $num2, $num3);
                    $temp[] = $res;
                } catch (Exception $e) {
                    $line = readline();
                    $exception = false;
                    echo $e->getMessage().PHP_EOL;
                    calculate($line,$arr,false);
                }
            } else {
                break;
            }
        }
        if (!$exception) {
            $arr = $temp;
        }
    }
}

function sumNumbers($num1, $num2) {
    return $num1 + $num2;
}

function multiplyNumbers($num1, $num2) {
    return $num1 * $num2;
}

function divideNumbers ($num1, $num2) {
    if ($num2 == 0) {
        throw new Exception('Caught exception: Division by zero.');
    } else {
        return $num1 / $num2;
    }
}

function subtractNumbers ($num1, $num2) {
    return $num1-$num2;
}

function factorialOfNumber ($num) {
    $res = 1;
    for ($i = $num; $i > 0; $i--) {
        $res *= $i;
    }

    return $res;
}

function rootNumber ($num) {
    if ($num <= 0) {
        throw new Exception('Caught exception: Can\'t take the root of a negative number');
    } else {
        return sqrt($num);
    }
}

function powerNumber ($num1, $num2) {
    $res = 1;

    for ($i = 0; $i < $num2; $i++) {
        $res*=$num1;
    }

    return $res;
}

function quadraticCompute ($a, $b, $c) {
    if ($a == 0) {
        throw new Exception('Caught exception: Division by zero.');
    } else {
        $x1 = (-$b + sqrt($b*$b - 4*$a*$c))/2*$a;
        $x2 = (-$b - sqrt($b*$b - 4*$a*$c))/2*$a;
        if ($b*$b - 4*$a*$c === 0) {
            return $x1;
        }elseif ($b*$b - 4*$a*$c > 0) {
            return $x1 + $x2;
        } else {
            return 0;
        }
    }
}