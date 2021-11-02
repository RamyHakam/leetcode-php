<?php

namespace Hakam\LeetCodePhp\Tests\LinkedList;

use Hakam\LeetCodePhp\LinkedList\ListNode;
use Hakam\LeetCodePhp\LinkedList\ReOrderList;
use Hakam\LeetCodePhp\Tests\Helper\LinkedListHelperTrait;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class ReOrderListTest extends MainTest
{
    use LinkedListHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $orderList = new ReOrderList();

        self::assertEmpty(array_diff(
            $expectedResult,
            $this->convertToArray(
                $orderList->reorderList($this->createLinkedListFromInput($inputData))))
        );
    }

    private function createLinkedListFromInput(array $input): ListNode
    {
        $head = new ListNode(array_shift($input));
        $list = $head;
        foreach ($input as $value)
        {
            $node = new ListNode($value);
            $head->next = $node;
            $head = $head->next;
        }
        return $list;
    }
}