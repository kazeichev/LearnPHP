<?php

namespace App\Tests;

use function App\Solution\addDigits;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAddDigits($expected, $number)
    {
        $this->assertEquals($expected, addDigits($number));
    }

    public function additionProvider()
    {
        return [
            [0, 0],
            [1, 1],
            [9, 9],
            [1, 10],
            [1, 19],
            [2, 38],
            [8, 1259],
            [2, 49871]
        ];
    }
}
