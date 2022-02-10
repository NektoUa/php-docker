<?php
echo "Hello word" . PHP_EOL;
system('ls');
$file = file_get_contents('../src/lorem.txt', 'r');
echo $file;