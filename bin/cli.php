<?php
var_dump($argv);
echo "Hello Ua" . PHP_EOL;
unset($argv[0]);

$sum = 0;

foreach ($argv as $item) {
    $sum += $item;
}

echo $sum . PHP_EOL;
