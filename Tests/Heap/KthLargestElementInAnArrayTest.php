<?php

namespace Hakam\LeetCodePhp\Tests\Heap;

use Hakam\LeetCodePhp\Heap\KthLargestElementInAnArray;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class KthLargestElementInAnArrayTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $kthLargestElement = new KthLargestElementInAnArray();
        self::assertEquals($expectedResult,$kthLargestElement->findKthLargest($inputData[0],$inputData[1]));
    }
}