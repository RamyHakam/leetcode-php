<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\RomanToInteger;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\String\RomanToInteger
 */
class RomanToIntTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $romanToInt = new RomanToInteger();
        self::assertEquals($expectedResult,$romanToInt->romanToInt($inputData));
    }
}