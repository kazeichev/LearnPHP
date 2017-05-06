<?php

namespace App\Tests;

use function App\Solution\uniq;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testUniq($expected, $source)
    {
        $actual = uniq($source);

        sort($expected);
        sort($actual);
        $this->assertEquals($expected, $actual);
    }

    public function additionProvider()
    {
        return [
            [[], []],
            [[1], [1]],
            [[1], [1, 1]],
            [[1, 2], [1, 2, 1]],
            [[10, 1, 2, 3, -10], [10, 1, 2, 10, 3, 2, -10]],
        ];
    }
}
