<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

class MoveZeroes
{
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        foreach ($nums as $i => $iValue) {
            if ($iValue === 0) {
                unset($nums[$i]);
                $nums[] = 0;
            }
        }
    }
}