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
        $strList = [];

        for ($i = 1; $i <= $count; $i++) {
            if ($i % 15 === 0) {
                $strList[] = 'FizzBuzz';
            } elseif ($i % 3 === 0) {
                $strList[] = 'Fizz';
            } elseif ($i % 5 === 0) {
                $strList[] = 'Buzz';
            } else {
                $strList[] = \strval($i);
            }
        }

        return \implode(',', $strList);
    }
}
