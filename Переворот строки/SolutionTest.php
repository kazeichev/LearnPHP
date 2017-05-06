<?php

namespace App\Tests;

use function App\Solution\reverse;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testReverse($expected, $str)
    {
        $this->assertEquals($expected, reverse($str));
    }

    public function additionProvider()
    {
        return [
            ['olleh', 'hello'],
            ['!dlroW ,olleh', 'hello, World!'],
            ['aim amaM', 'Mama mia'],
        ];
    }
}
