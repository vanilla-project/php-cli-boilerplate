#!/usr/bin/env php
<?php
declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';

use Example\Greeting;

$greeting = new Greeting();

echo $greeting->sayHello();
