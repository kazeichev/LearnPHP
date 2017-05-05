<?php

namespace App;

use function App\Solution\result;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testResult($expected, $a, $b, $c, $d)
    {
        $this->assertEquals($expected, result($a, $b, $c, $d));
    }

    public function additionProvider()
    {
        return [
            [1, 1, 2, 1, 3],
            [1, 2, 1, 3, 1],
            [0, 2, 2, 1, 2],
            [0, 2, 2, 3, 2],
            [0, 1, 2, 3, 2],
            [2, 0, 0, 0, 0],
            [2, 1, 2, 1, 2],
            [2, 4, 2, 4, 2],
            [1, 2, 2, 4, 4],
            [1, 4, 4, 2, 2]
        ];
    }
}
