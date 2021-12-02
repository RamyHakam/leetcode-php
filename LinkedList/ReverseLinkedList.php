<?php

namespace Hakam\LeetCodePhp\LinkedList;

/**
 * LeetCode Problem Link : https://leetcode.com/problems/reverse-linked-list
 */
class ReverseLinkedList
{
    public function reverseList(ListNode $node): ?ListNode
    {
        $current = $node;
        $prev = null;
        while ($current !== null) {
            $tempNode = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $tempNode;
        }
        return $prev;
    }
}