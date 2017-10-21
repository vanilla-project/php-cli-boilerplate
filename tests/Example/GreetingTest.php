<?php
declare(strict_types=1);

namespace Tests\Example;

use PHPUnit\Framework\TestCase;
use Example\Greeting;

class GreetingTest extends TestCase
{
    public function testItPrintsHello()
    {
        $greeting = new Greeting();

        $expectedResult = 'Hello' . PHP_EOL;
        $actualResult = $greeting->sayHello();

        $this->assertEquals($expectedResult, $actualResult);
    }
}
