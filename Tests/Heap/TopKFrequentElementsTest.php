<?php

namespace Hakam\LeetCodePhp\Tests\Heap;

use Hakam\LeetCodePhp\Heap\TopKFrequentElements;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\Heap\TopKFrequentElements
 * @covers \Hakam\LeetCodePhp\Heap\PQ
 */
class TopKFrequentElementsTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $topFrequentElement = new TopKFrequentElements();
        self::assertEmpty(array_diff($expectedResult,$topFrequentElement->topKFrequent($inputData[0],$inputData[1])));
    }
}