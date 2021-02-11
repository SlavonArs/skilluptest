<?php

echo 'Hello world!', PHP_EOL;

$g1 = print 123;
var_dump($g1);

$nowdoc = <<<'HTML'
<script type="text/javascript">alert
    (1)
</script>
HTML;

echo $nowdoc, PHP_EOL;
