<?php

namespace Hakam\LeetCodePhp\Tests\LinkedList;

use Hakam\LeetCodePhp\LinkedList\ReverseLinkedList;
use Hakam\LeetCodePhp\Tests\Helper\LinkedListHelperTrait;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class ReverseLinkedListTest extends MainTest
{
    use LinkedListHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $reversList = new ReverseLinkedList();
        $list = $this->convertFromArray($inputData);
        self::assertEmpty(array_diff($expectedResult,
            $this->convertToArray($reversList->reverseList($list))));
    }
}