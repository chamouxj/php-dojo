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

    /** @testdox test class outputs string */
    public function testOutputsString()
    {
        $testedInstance = new FizzBuzzer();
        self::assertIsString($testedInstance());
    }

    /** @testdox test class outputs 100 strings separated by a new line character */
    public function testOutputs100Strings()
    {
        $testedInstance = new FizzBuzzer();
        $output = $testedInstance();
        self::assertIsString($output);
        self::assertCount(100, explode(PHP_EOL, $output));
    }
}
