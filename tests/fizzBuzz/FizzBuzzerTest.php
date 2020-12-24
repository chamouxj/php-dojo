<?php

namespace phpdojo\tests\fizzBuzz;

use PHPUnit\Framework\TestCase;
use vdebes\phpdojo\fizzBuzz\fizzBuzzer;

class FizzBuzzerTest extends TestCase
{
    public function testIsInstanciable()
    {
        $testedInstance = new FizzBuzzer();
        self::assertIsObject($testedInstance);
    }
}
