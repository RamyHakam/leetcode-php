<?php

namespace ArrayProblems;

use Hakam\LeetCodePhp\ArrayProblems\MergeSortedArray;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class MergeSortedArrayTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $merge = new MergeSortedArray();
        $merge->mergeByHeap(...$inputData);
        self::assertEmpty(array_diff($expectedResult,$inputData[0]));
    }

    /**
     * @dataProvider provideData
     */
    public function testWithDataListByPointers($expectedResult, $inputData): void
    {
        $merge = new MergeSortedArray();
        $merge->mergeByPointers(...$inputData);
        self::assertEmpty(array_diff($expectedResult,$inputData[0]));
    }
}