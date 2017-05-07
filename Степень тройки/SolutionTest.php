<?php

namespace App\Tests;

use function App\Solution\isPowerOfThree;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testIsPowerOfThree($expected, $number)
    {
        $this->assertEquals($expected, isPowerOfThree($number));
    }

    public function additionProvider()
    {
        return [
            [false, 0],
            [true, 1],
            [true, 3],
            [false, 5],
            [false, 6],
            [true, 9],
            [true, 27]
        ];
    }
}
