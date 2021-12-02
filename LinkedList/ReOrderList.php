<?php

namespace Hakam\LeetCodePhp\LinkedList;

/**
 * LeetCode Problem Link: https://leetcode.com/problems/reorder-list
 */
class ReOrderList
{
    /**
     * @param ListNode $head
     * @return NULL
     */
    public function reorderList(ListNode $head)
    {
        $arrayList = [];
        $copyHead = $head;
        while ($copyHead !== null) {
            $arrayList [] = $copyHead;
            $copyHead = $copyHead->next;
        }
        $head = new ListNode();
        $order = $head;
        while (!empty($arrayList)) {
            $temp = array_shift($arrayList);
            $tempNext = array_pop($arrayList);
            if ($tempNext !== null) {
                $tempNext->next = null;
            }
            $temp->next = $tempNext;
            $head->next = $temp;
            $head = $head->next->next;
        }
        return $order->next;
    }
}