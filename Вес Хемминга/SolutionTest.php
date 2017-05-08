<?php

namespace App\Tests;

use function App\Solution\hammingWeight;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testHammingWeight($expected, $number)
    {
        $this->assertEquals($expected, hammingWeight($number));
    }

    public function additionProvider()
    {
        return [
            [0, 0],
            [1, 1],
            [2, 5],
            [2, 10],
            [4, 101],
            [6, 12345]
        ];
    }
}
