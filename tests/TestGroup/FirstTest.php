<?php

declare(strict_types=1);

namespace Project\Tests\TestGroup;

use PHPUnit\Framework\TestCase;
use Project\Example;

final class FirstTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        return;
    }

    public static function tearDownAfterClass(): void
    {
        return;
    }

    public function setUp(): void
    {
        return;
    }

    public function tearDown(): void
    {
        return;
    }

    public function testSimpleExample(): void
    {
        $example = new Example("you");
        $this->assertEquals(
            "Hello, you",
            $example->hello()
        );
    }
}
