<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\StringToInteger;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class StringToIntegerTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $stringToInteger = new StringToInteger();
        self::assertEquals($expectedResult,$stringToInteger->myAtoi($inputData));
    }
}