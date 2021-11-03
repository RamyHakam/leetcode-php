<?php

namespace Hakam\LeetCodePhp\Tests\ArrayProblems;

use Hakam\LeetCodePhp\ArrayProblems\TwoSum;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class TwoSumTest extends MainTest
{

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $twoSum = new TwoSum();
        $result = $twoSum->twoSum($inputData['nums'],$inputData['target']);
        self::assertEmpty(array_diff($expectedResult,$result));
    }
}