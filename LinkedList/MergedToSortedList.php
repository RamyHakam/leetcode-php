<?php

namespace Hakam\LeetCodePhp\LinkedList;


class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class MergedToSortedList
{


    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        if($l1 === null)
        {
            return  $l2;
        }
        if($l2 ===  null)
        {
            return  $l1;
        }

            if($l1->val < $l2->val)
            {
                $l1->next = $this->mergeTwoLists($l1->next,$l2);
                return $l1;
            }

        $l2->next = $this->mergeTwoLists($l2->next,$l1);
        return $l2;
    }

}