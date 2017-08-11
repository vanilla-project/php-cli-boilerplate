<?php
declare(strict_types=1);

namespace Tests\Example;

use Example\Greeting;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    public function testItGreetsUser(): void
    {
        $greeting = new Greeting('Ada Lovelace');

        $expectedResult = 'Hello Ada Lovelace' . PHP_EOL;
        $actualResult = $greeting->sayHello();

        $this->assertEquals($expectedResult, $actualResult);
    }
}
