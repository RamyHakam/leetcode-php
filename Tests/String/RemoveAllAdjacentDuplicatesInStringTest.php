<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\RemoveAllAdjacentDuplicatesInString;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\String\RemoveAllAdjacentDuplicatesInString
 */
class RemoveAllAdjacentDuplicatesInStringTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $remover = new RemoveAllAdjacentDuplicatesInString();
        $value =$remover->removeDuplicates($inputData);
        self::assertEquals($expectedResult,$value);
    }

}