<?php

namespace Hakam\LeetCodePhp\Heap;

use SplMinHeap;

class KthLargestElementInAnArray
{

    public function findKthLargest($nums, $k)
    {
        $minHeap = new SplMinHeap();
        for ($index = 0; $index < $k; $index++) {
            $minHeap->insert($nums[$index]);
        }

        for ($index = $k, $indexMax = count($nums); $index < $indexMax; $index++) {
            if ($nums[$index] <= $minHeap->top()) {
                continue;
            }
            $minHeap->extract();
            $minHeap->insert($nums[$index]);
        }
        return $minHeap->top();
    }
}