<?php

namespace Hakam\LeetCodePhp\Heap;

use SplMinHeap;

class KthLargestElementInAStream
{
    /**
     * @param Integer $k
     * @param Integer[] $nums
     */
    private SplMinHeap $minHeap;
    private int $kTh;

    public function __construct($k, $nums)
    {
        $this->kTh = $k;
        $this->minHeap = new SplMinHeap();
        if ($k < count($nums)) {

            for ($index = 0; $index < $k; $index++) {
                $this->minHeap->insert($nums[$index]);
            }
            for ($index = $k, $indexMax = count($nums); $index < $indexMax; $index++) {
                $this->add($nums[$index]);
            }
        } else {
            for ($index = 0, $indexMax = count($nums); $index < $indexMax; $index++) {
                $this->add($nums[$index]);
            }
        }

    }

    /**
     * @param Integer $val
     * @return Integer
     */
    public function add(int $val): int
    {
        if ($this->minHeap->count() < $this->kTh) {
            $this->minHeap->insert($val);
        } elseif ($val > $this->minHeap->top()) {
            $this->minHeap->extract();
            $this->minHeap->insert($val);
        }
        return $this->minHeap->top();
    }
}