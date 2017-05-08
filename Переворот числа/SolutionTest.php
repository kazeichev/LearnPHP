<?php

namespace App\Tests;

use function App\Solution\reverseInt;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testReverseInt($expected, $number)
    {
        $this->assertEquals($expected, reverseInt($number));
    }

    public function additionProvider()
    {
        return [
            [0, 0],
            [21, 12],
            [-37, -73],
            [-3432431, -1342343],
        ];
    }
}
