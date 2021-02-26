<?php

function test(): void
{
//    echo __FUNCTION__, PHP_EOL;
    echo 'Random number is: ' . mt_rand() . PHP_EOL;
}

//test();

$anonimous = function () {
    echo 'Random number is' . mt_rand() . PHP_EOL;
};

var_dump($anonimous);
