<?php

/**
 * @license MIT
 */

declare(strict_types=1);

namespace NewDirectoryStructure;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzz::class)]
final class FizzBuzzTest extends TestCase
{
    #[Test]
    #[DataProvider('getStringDataProvider')]
    public function testGetString(int $input, string $expected): void
    {
        $fizzBuzz = new FizzBuzz();
        self::assertSame($expected, $fizzBuzz->getString($input));
    }

    public static function getStringDataProvider(): array
    {
        return [
            [1, '1'],
            [2, '1,2'],
            [3, '1,2,Fizz'],
            [5, '1,2,Fizz,4,Buzz'],
            [6, '1,2,Fizz,4,Buzz,Fizz'],
            [15, '1,2,Fizz,4,Buzz,Fizz,7,8,Fizz,Buzz,11,Fizz,13,14,FizzBuzz'],
        ];
    }
}
