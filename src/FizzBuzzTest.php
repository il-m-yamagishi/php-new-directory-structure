<?php

/**
 * @license MIT
 */

declare(strict_types=1);

namespace NewDirectoryStructure;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzz::class)]
final class FizzBuzzTest extends TestCase
{
    #[Test]
    public function testGetString(): void
    {
        $fizzBuzz = new FizzBuzz();
        self::assertSame('1', $fizzBuzz->getString(1));
    }
}
