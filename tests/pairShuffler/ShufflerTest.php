<?php

namespace phpdojo\tests\pairShuffler;

use PHPUnit\Framework\TestCase;
use vdebes\phpdojo\pairShuffler\Shuffler;

class ShufflerTest extends TestCase
{
    public function testShuffler(): void
    {
        $testedInstance = new Shuffler();
        self::assertIsObject($testedInstance);
        self::assertTrue(method_exists($testedInstance, 'shuffle'));
        self::assertIsArray($testedInstance->shuffle());

        $list = ['foo'];
        $result = $testedInstance->shuffle($list);
        self::assertCount(count($list), $result);
    }
}
