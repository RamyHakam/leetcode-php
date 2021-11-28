<?php

namespace Hakam\LeetCodePhp\LinkedList;
/**
 * LeetCode Problem Link : https://leetcode.com/problems/reverse-linked-list-ii
 */
class ReverseLinkedListII
{
    /**
     * @param ListNode $head
     * @param Integer $left
     * @param Integer $right
     * @return ListNode
     */
  public  function reverseBetween(ListNode $head, int $left, int $right): ListNode
    {
        $sentinel = new ListNode(0, $head);
        $p1 = $sentinel;

        for ($i = 0; $i < $left - 1; $i++) {
            $p1 = $p1->next;
        }

        $p2 = $p1->next;
        $p3 = $p2;
        $reverted = null;

        for ($i = 0; $i <= ($right - $left); $i++) {
            $tmp = $p2->next;
            $p2->next = $reverted;
            $reverted = $p2;
            $p2 = $tmp;
        }

        $p1->next = $reverted;
        $p3->next = $p2;
        return $sentinel->next;
    }
}