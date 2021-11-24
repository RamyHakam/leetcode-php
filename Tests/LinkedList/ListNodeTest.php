<?php

namespace Hakam\LeetCodePhp\Tests\LinkedList;

use Hakam\LeetCodePhp\LinkedList\ListNode;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Hakam\LeetCodePhp\LinkedList\ListNode
 */
class ListNodeTest extends TestCase
{
    public function testCanCreateALinkedList()
    {
        $list = new ListNode(0);
        $list->next = new ListNode(1);
        $list->next->next = new ListNode(3);
        self::assertInstanceOf(ListNode::class,$list);
        self::assertInstanceOf(ListNode::class,$list->next);
        self::assertInstanceOf(ListNode::class,$list->next->next);
    }

}