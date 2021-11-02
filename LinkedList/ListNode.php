<?php

namespace Hakam\LeetCodePhp\LinkedList;

class ListNode
{
    public int $val = 0;
    public ?ListNode $next = null;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}