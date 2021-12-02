<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

use SplMinHeap;

/**
 * LeetCode Problem Link : https://leetcode.com/problems/merge-sorted-array
 */
class MergeSortedArray
{
    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return void
     */

    public function mergeByHeap(array &$nums1, int $m, array $nums2, int $n): void
    {
        $minHeap = new SplMinHeap();
        for ($index = 0; $index < $m + $n; $index++) {
            if ($index <= $m - 1) {
                $value = $nums1[$index];
            } else {
                $value = array_shift($nums2);
            }
            $minHeap->insert($value);
        }
        for ($index = 0; $index < $m + $n; $index++) {
            $nums1[$index] = $minHeap->extract();
        }
    }

    public function mergeByPointers(&$nums1, $m, $nums2, $n): void
    {
        for ($i = 0; $i < $m; $i++) {
            $nums1Copy[$i] = $nums1[$i];
        }
        $p1 = 0;
        $p2 = 0;
        for ($p = 0; $p < $m + $n; $p++) {
            if (($p1 < $m && $nums1Copy[$p1] <= $nums2[$p2]) || $p2 >= $n) {
                $nums1[$p] = $nums1Copy[$p1++];
            } else {
                $nums1[$p] = $nums2[$p2++];
            }
        }
    }
}