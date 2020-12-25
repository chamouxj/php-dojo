<?php

namespace phpdojo\tests\unit\helloWorld;

use PHPStan\Testing\TestCase;
use vdebes\phpdojo\helloWorld\Greeter;

class GreeterTest extends TestCase
{
    /** @testdox class is instantiable */
    public function testIsInstiable(): void
    {
        $testedInstance = new Greeter();
        self::assertIsObject($testedInstance);
    }

    /** @testdox class is invokable */
    public function testIsInvokable(): void
    {
        $testedInstance = new Greeter();
        $testedInstance();

        self::assertNotNull($testedInstance);
    }
}
