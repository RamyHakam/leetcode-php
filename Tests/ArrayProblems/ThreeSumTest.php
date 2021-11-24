<?php

namespace Hakam\LeetCodePhp\Tests\ArrayProblems;

use Hakam\LeetCodePhp\ArrayProblems\ThreeSum;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\ArrayProblems\ThreeSum
 */
class ThreeSumTest extends MainTest
{

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $threeSum = new ThreeSum();
        $list = $threeSum->threeSum($inputData);
        self::assertSameSize($expectedResult, $list);
        $expectedResult = array_merge(...$expectedResult);
        asort($expectedResult);
        $list = array_merge(...$list);
        asort($list);
        self::assertEmpty(array_diff($expectedResult, $list));
    }
}