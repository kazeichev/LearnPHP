<?php

namespace App\Tests;

use function App\Solution\sumDouble;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testSumDouble($expected, $from, $to)
    {
        $this->assertEquals($expected, sumDouble($from, $to));
    }

    public function additionProvider()
    {
        return [
            [1, 1, 2],
            [34, 3, 6],
            [35, 1, 5],
            [20, 2, 5],
            [45, -3, 6]
        ];
    }
}
