<?php

namespace Hakam\LeetCodePhp\LinkedList;


class ReOrderList
{
    /**
     * @param ListNode $head
     * @return NULL
     */
    function reorderList(ListNode $head) {
        $arrayList = [];
        $order = new ListNode();
        $copyHead = $head;
        while($copyHead != null)
        {
            $arrayList [] = $copyHead;
            $copyHead = $copyHead->next;
        }
        $head = New ListNode();
        $order = $head;
        while(!empty($arrayList))
        {
            $temp = array_shift($arrayList);
            $tempNext = array_pop($arrayList);
            if($tempNext !== null)
            {
                $tempNext->next = null;
            }
            $temp->next = $tempNext;
            $head->next = $temp;
            $head = $head->next->next;
        }
        return $order->next;
    }
}