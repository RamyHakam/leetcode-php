<?php

namespace Hakam\LeetCodePhp\Tests\Helper;

use Hakam\LeetCodePhp\LinkedList\ListNode;

/**
 * @codeCoverageIgnore
 */
trait LinkedListHelperTrait
{
    protected function convertToArray(?ListNode $node): ?array
    {
        $list = [];
        while ($node !== null) {
            $list[] = $node->val;
            $node = $node->next;
        }
        return $list;
    }

    protected function convertFromArray(array $arrayList): ?ListNode
    {
        $list = new ListNode();
        $head = $list;
        foreach ($arrayList as $nodeValue) {
            $list->next = new ListNode($nodeValue);
            $list = $list->next;
        }
        return $head->next;
    }
}