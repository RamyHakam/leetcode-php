<?php

namespace ArrayProblems;

use Hakam\LeetCodePhp\ArrayProblems\MergeIntervals;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class MergeIntervalsTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
       $merge = new MergeIntervals();
       $result = $merge->merge($inputData);
       $index = 0;
       foreach ($result as $item)
       {
           self::assertEmpty(array_diff($expectedResult[$index++],$item));
       }
    }
}