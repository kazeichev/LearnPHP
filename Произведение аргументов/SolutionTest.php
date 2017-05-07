<?php

namespace App;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testBallVolume($expected, $args)
    {
        $this->assertEquals($expected, call_user_func_array('App\Solution\multiArgs', $args));
    }

    public function additionProvider()
    {
        return [
            [null, []],
            [1, [1]],
            [18, [9, 2]],
            [-24, [2, -3, 4]],
            [0, [10, -1, 4, 0]]
        ];
    }
}
