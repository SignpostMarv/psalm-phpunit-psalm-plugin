<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testThing() : void
    {
        static::assertIsInt(PHP_VERSION_ID);
    }
}
