<?php

namespace Hakam\LeetCodePhp\Tests\LinkedList;


use Hakam\LeetCodePhp\LinkedList\RemoveNthNodeFromEndOfList;
use Hakam\LeetCodePhp\Tests\Helper\LinkedListHelperTrait;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\LinkedList\RemoveNthNodeFromEndOfList
 */
class RemoveNthNodeFromEndOfListTest extends MainTest
{
    use LinkedListHelperTrait;

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $list = $this->convertFromArray($inputData[0]);
        $remover = new RemoveNthNodeFromEndOfList();
        self::assertEmpty(array_diff($expectedResult,
            $this->convertToArray(
                $remover->removeNthFromEnd($list,$inputData[1]))
        ));
    }
}