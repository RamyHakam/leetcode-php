<?php

namespace Hakam\LeetCodePhp\Tests\LinkedList;

use Hakam\LeetCodePhp\LinkedList\MergedToSortedList;
use Hakam\LeetCodePhp\Tests\Helper\LinkedListHelperTrait;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\LinkedList\MergedToSortedList
 */
class MergedToSortedListTest extends MainTest
{
    use LinkedListHelperTrait;

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $inputData = array_values($inputData);
        $this->addToAssertionCount(1);
        $mergeTwoSortedList = new MergedToSortedList();
        $mergedList = $mergeTwoSortedList->mergeTwoLists(
            $this->convertFromArray($inputData[0] ?? []),
            $this->convertFromArray($inputData[1] ?? []));

        self::assertEmpty(array_diff($expectedResult, $this->convertToArray($mergedList)));
    }
}