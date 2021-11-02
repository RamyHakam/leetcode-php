<?php

namespace Hakam\LeetCodePhp\LinkedList;

class MergedToSortedList
{

    /**
     * @param ListNode|null $l1
     * @param ListNode|null $l2
     * @return ListNode|null
     */
    function mergeTwoLists(?ListNode $l1, ?ListNode $l2): ?ListNode
    {
        if ($l1 === null) {
            return $l2;
        }
        if ($l2 === null) {
            return $l1;
        }

        if ($l1->val < $l2->val) {
            $l1->next = $this->mergeTwoLists($l1->next, $l2);
            return $l1;
        }

        $l2->next = $this->mergeTwoLists($l2->next, $l1);
        return $l2;
    }
}