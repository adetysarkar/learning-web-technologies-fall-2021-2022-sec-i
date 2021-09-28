<?php
$number1 = 20;
$number2 = 15;
$number3 = 22;
if ($number1 > $number2 && $number1 > $number3) {
    echo $number1 . " is the largest number";
} else {
    if ($number2 > $number1 && $number2 > $number3) {
        echo $number2 . " is the largest number";
    } else
        echo $number3 . " is the largest number";
}