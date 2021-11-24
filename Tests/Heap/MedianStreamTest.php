<?php

namespace Hakam\LeetCodePhp\Tests\Heap;

use Hakam\LeetCodePhp\Heap\MedianStream;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\Heap\MedianStream
 */
class MedianStreamTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
       $medianStream = new MedianStream();
       self::assertEmpty(array_diff($expectedResult,$medianStream->findMedian($inputData)));
    }
}