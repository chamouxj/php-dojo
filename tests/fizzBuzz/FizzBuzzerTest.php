<?php

namespace phpdojo\tests\fizzBuzz;

use PHPUnit\Framework\TestCase;
use vdebes\phpdojo\fizzBuzz\fizzBuzzer;

class FizzBuzzerTest extends TestCase
{
    /** @testdox test class is instanciable */
    public function testIsInstanciable()
    {
        $testedInstance = new FizzBuzzer();
        self::assertIsObject($testedInstance);
    }

    /** @testdox test class is invokable */
    public function testIsInvokable()
    {
        $testedInstance = new FizzBuzzer();
        $testedInstance();

        self::assertTrue(true);
    }

    /** @testdox test class outputs strings */
    public function testOutputsString()
    {
        $testedInstance = new FizzBuzzer();
        self::assertIsString($testedInstance());
    }
}
