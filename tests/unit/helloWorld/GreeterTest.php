<?php

namespace phpdojo\tests\unit\helloWorld;

use PHPStan\Testing\TestCase;

class GreeterTest extends TestCase
{
    /** @testdox class is instantiable */
    public function testIsInstiable(): void
    {
        $testedInstance = new Greeter();
    }
}
