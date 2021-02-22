<?php

$eol = php_sapi_name() === 'cli' ? PHP_EOL : '<br';

for ($i = 0; $i < 5; $i++) {
    echo $i, $eol;
}