<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

class RemoveElement
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public function removeElement(array &$nums, int $val): int
    {
        $count = count($nums);
        for($index = 0; $index<$count;$index ++)
        {
            if ($nums[$index] === $val) {
                $nums[$index--] = $nums[--$count];
            }
        }
        return $count;
    }
}