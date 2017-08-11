#!/usr/bin/env php
<?php
require './vendor/autoload.php';

use Example\Greeting;

if (isset($argv[1])) {
    $name = $argv[1];
} else {
    exit('Please enter your name (eg. `php hello.php "Ada Lovelace"`).' . PHP_EOL);
}

$greeting = new Greeting($name);

echo $greeting->sayHello();
