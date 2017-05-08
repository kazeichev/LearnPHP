<?php

namespace App\Tests;

use function App\Solution\isPrime;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testIsPrime($expected, $number)
    {
        $this->assertEquals($expected, isPrime($number));
    }

    public function additionProvider()
    {
        return [
            [false, 0],
            [false, -7],
            [false, 1],
            [true, 2],
            [true, 3],
            [false, 4],
            [true, 5],
            [false, 9],
            [false, 10],
            [false, 14],
            [false, 100],
            [true, 101]
        ];
    }
}
