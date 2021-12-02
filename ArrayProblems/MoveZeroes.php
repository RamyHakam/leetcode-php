<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

/**
 * LeetCode Problem Link : https://leetcode.com/problems/move-zeroes
 */
class MoveZeroes
{
    /**
     * @param Integer[] $nums
     * @return void
     */
    public function moveZeroes(array &$nums): void
    {
        foreach ($nums as $i => $iValue) {
            if ($iValue === 0) {
                unset($nums[$i]);
                $nums[] = 0;
            }
        }
    }
}