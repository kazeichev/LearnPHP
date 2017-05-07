<?php

namespace App\Solution\Tests;

use function App\Solution\compareVersion;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testCompareVersion($expected, $first, $second)
    {
        $this->assertEquals($expected, compareVersion($first, $second));
    }

    public function additionProvider()
    {
        return [
            [-1, "0.1", "0.2"],
            [1, "0.2", "0.1"],
            [0, "4.2", "4.2"],
            [-1, "0.2", "0.12"],
            [-1, "3.2", "4.12"],
            [1, "3.2", "2.12"],
        ];
    }
}
