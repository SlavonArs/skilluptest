<?php

// Homework
// 1 - print 123

$x = 123;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3,PHP_EOL;
}
// 2 - calculator

$firstNumber = readline('Enter first number   ');
PHP_EOL;
$operator = readline('Enter your arithmetic operation   ');
PHP_EOL;
$secondNumber = readline('Enter second number   ');
PHP_EOL;
switch ($operator) {
    case '+':
        echo $firstNumber + $secondNumber, PHP_EOL;
        break;
    case '-':
        echo $firstNumber - $secondNumber, PHP_EOL;
        break;
    case '*':
        echo $firstNumber * $secondNumber, PHP_EOL;
        break;
    case '/':
        echo $firstNumber / $secondNumber, PHP_EOL;
        break;
    case '%':
        echo $firstNumber % $secondNumber, PHP_EOL;
        break;
    case '**':
        echo $firstNumber ** $secondNumber, PHP_EOL;
        break;
}