<?php

$fp = fopen('test.txt', 'r');

fseek($fp, 5);
// fwrite($fp, 'Hello world' . PHP_EOL);

$text = fread($fp, 3);

var_dump($text);

fclose($fp);
