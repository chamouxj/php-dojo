<?php

namespace phpdojo\tests\unit\helloWorld;

use PHPUnit\Framework\TestCase;
use vdebes\phpdojo\helloWorld\FramedGreeter;
use vdebes\phpdojo\helloWorld\Greet;

class FramedGreeterTest extends TestCase
{
    /**
     * @testdox Framed greeter surrounds the message with * characters
     *
     * This is a good example of how to guide a pair toward an implementation choice while working in ping-pong.
     */
    public function testFramedGreeter(): void
    {
        $testedInstance = new FramedGreeter();

        self::assertIsObject($testedInstance);
        self::assertInstanceOf(Greet::class, $testedInstance);
    }
}
