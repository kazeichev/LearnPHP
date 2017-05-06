<?php

namespace App\Tests;

use function App\Solution\wordsCount;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    /**
     * @dataProvider additionProvider
     */
    public function testWordsCount($expected, $str)
    {
        $this->assertEquals($expected, wordsCount($str));
    }

    public function additionProvider()
    {
        return [
            [['a' => 2, 'c' => 1, 'd' => 2], 'a c  d a d '],
            [['aa' => 2, 'db' => 2, 'ce' => 1, 'eU' => 1, 'cE' => 1], ' aa aa db   ce   db eU cE'],
            [['Dd' => 3, 'Aa' => 1, 'cc' => 1, 'a' => 1], '   Dd Aa cc Dd a Dd    ']
        ];
    }
}
