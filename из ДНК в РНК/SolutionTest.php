<?php

namespace App;

class SolutionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testLengthOfLastWord($expected, $argument)
    {
        $this->assertEquals($expected, Solution\toRna($argument));
    }

    public function additionProvider()
    {
        return [
            ['G', 'C'],
            ['C', 'G'],
            ['A', 'T'],
            ['U', 'A'],
            ['UGCACCAGAAUU', 'ACGTGGTCTTAA'],
        ];
    }
}
