<?php

namespace Hakam\LeetCodePhp\Tests\Helper;

use Hakam\LeetCodePhp\LinkedList\ListNode;

trait LinkedListHelperTrait
{
    protected function convertToArray(ListNode $node): array
    {
        $list = [];
        while ($node !== null )
        {
            $list[] = $node->val;
           $node = $node->next;
        }
        return $list;
    }
}