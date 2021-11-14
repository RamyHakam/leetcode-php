<?php

namespace Hakam\LeetCodePhp\Tests\Heap;

use Hakam\LeetCodePhp\Heap\KthLargestElementInAStream;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class KthLargestElementInAStreamTest extends MainTest
{

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $kthLargestElement = new KthLargestElementInAStream($inputData[0][0], $inputData[0][1]);
        array_shift($inputData);
        foreach ($inputData as $datum) {
            $result[] = $kthLargestElement->add($datum[0]);
        }
        self::assertEmpty(array_diff($expectedResult, $result));
    }
}