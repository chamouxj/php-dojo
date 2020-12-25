<?php

namespace phpdojo\tests\fizzBuzz;

use PHPUnit\Framework\TestCase;
use vdebes\phpdojo\fizzBuzz\fizzBuzzer;

class FizzBuzzerTest extends TestCase
{
    /** @testdox class is instanciable */
    public function testIsInstanciable()
    {
        $testedInstance = new FizzBuzzer();
        self::assertIsObject($testedInstance);
    }

    /** @testdox class is invokable */
    public function testIsInvokable()
    {
        $testedInstance = new FizzBuzzer();
        $testedInstance();

        self::assertTrue(true);
    }

    /** @testdox class outputs string */
    public function testOutputsString()
    {
        $testedInstance = new FizzBuzzer();
        self::assertIsString($testedInstance());
    }

    /** @testdox class outputs 100 strings separated by a new line character */
    public function testOutputs100Strings()
    {
        $testedInstance = new FizzBuzzer();
        $output = $testedInstance();
        self::assertIsString($output);
        self::assertCount(100, explode(PHP_EOL, $output));
    }

    /** @testdox class outputs numeric strings or Fizz instead of multiples of 3 */
    public function testOutputsNumericStringsOrFizz()
    {
        $testedInstance = new FizzBuzzer();
        $output = $testedInstance();
        $stringAsArray = explode(PHP_EOL, $output);
        $testIndexesForThree = [3,6,9,12,15,18,21,24,27,30];
        foreach ($stringAsArray as $index => $value) {
            if (++$index > end($testIndexesForThree)) {
                break;
            }

            if (in_array($index, $testIndexesForThree)) {
                self::assertEquals('Fizz', $value);
                continue;
            }

            self::assertIsNumeric($value);
        }
    }

    /** @testdox class outputs numeric strings or Buzz instead of multiples of 5 */
    public function testOutputsNumericStringsOrBuzz()
    {
        $testedInstance = new FizzBuzzer();
        $output = $testedInstance();
        $stringAsArray = explode(PHP_EOL, $output);
        $testIndexesForThree = [5];
        foreach ($stringAsArray as $index => $value) {
            if (++$index > end($testIndexesForThree)) {
                break;
            }

            if (in_array($index, $testIndexesForThree)) {
                self::assertEquals('Buzz', $value);
                continue;
            }

            self::assertIsNumeric($value);
        }
    }
}
