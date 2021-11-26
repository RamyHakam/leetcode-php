<?php

namespace Hakam\LeetCodePhp\LinkedList;

class RemoveNthNodeFromEndOfList
{
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
  public  function removeNthFromEnd(ListNode $head, int $n) : ?ListNode
    {
        $dummy = new ListNode(0);
        $dummy->next = $head;
        $copyHead = $head;
        $length = 0;
        while ($copyHead !== null) {
            $copyHead = $copyHead->next;
            ++$length;
        }
        $length -= $n;
        $copyHead = $dummy;
        while ($length > 0) {
            $length--;
            $copyHead = $copyHead->next;
        }

        $copyHead->next = $copyHead->next->next;

        return $dummy->next;
    }
}