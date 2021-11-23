<?php

namespace Hakam\LeetCodePhp\LinkedList;

class ReverseLinkedList
{
    public function reverseList(ListNode $node)
    {
        $current = $node;
        $prev = null;
        while($current!==null)
        {
            $tempNode = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $tempNode;
        }
        return $prev;
    }
}