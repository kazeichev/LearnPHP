<?php

namespace App;

use function App\Solution\compact;
use \PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testCompact($expected, $source)
    {
        $this->assertEquals($expected, compact($source));
    }

    public function additionProvider()
    {
        return [
            [[2, 1, 3 => "", ''], [2, 1, null, "", '']],
            [[0, ""], [0, "", null]],
            [[false, true, 0x3], [false, true, 0x3]]
        ];
    }
}
