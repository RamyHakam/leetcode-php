<?php

namespace ArrayProblems;

use Hakam\LeetCodePhp\ArrayProblems\RemoveElement;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\ArrayProblems\RemoveElement
 */
class RemoveElementTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
       $removeElement = new RemoveElement();
       $arrayOfNumbers = $inputData[0];
       $count = $removeElement->removeElement($arrayOfNumbers,$inputData[1]);
       self::assertEmpty(array_diff($expectedResult,array_slice($arrayOfNumbers,0,$count-1)));
    }
}