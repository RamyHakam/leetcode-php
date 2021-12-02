<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

/**
 * LeetCode Problem Link: https://leetcode.com/problems/3sum
 */
class ThreeSum
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum(array $nums): array
    {
        sort($nums);
        $count = count($nums);
        $listOf3Sum = [];
        for ($index = 0; $index < $count; $index++) {
            $number = $nums[$index];
            if ($index > 0 && $number === $nums[$index - 1]) {
                continue;
            }
            $leftPointer = $index + 1;
            $rightPointer = count($nums) - 1;
            while ($leftPointer < $rightPointer) {
                $threeSum = $number + $nums[$leftPointer] + $nums[$rightPointer];
                if ($threeSum > 0) {
                    --$rightPointer;
                } elseif ($threeSum < 0) {
                    ++$leftPointer;
                } else {
                    $listOf3Sum [] = [$number, $nums[$leftPointer], $nums[$rightPointer]];
                    ++$leftPointer;
                    while (isset($nums[$leftPointer], $nums[$leftPointer - 1]) && $nums[$leftPointer] === $nums[$leftPointer - 1]) {
                        ++$leftPointer;
                    }
                }
            }
        }
        return $listOf3Sum;
    }
}