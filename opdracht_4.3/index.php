<?php

$num1 = 2;
$num2 = 10;

if ($num1 >= $num2) {
    $num1 = $num1* 2 + $num2;
    echo $num1;
} else {
    $num2 = $num2 * 2 + $num1;
    echo $num2;
}