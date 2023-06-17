<?php

/**
 * @license MIT
 */

declare(strict_types=1);

namespace NewDirectoryStructure;

final class FizzBuzz
{
    public function getString(int $count): string
    {
        return \sprintf('%s', $count);
    }
}
