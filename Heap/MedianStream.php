<?php

namespace Hakam\LeetCodePhp\Heap;

use SplMinHeap;

class MedianStream
{
    public function findMedian($arr): array
    {
        for ($key = 1, $keyMax = count($arr); $key <= $keyMax; $key++) {
            $minHeap = new SplMinHeap();

            for ($index = 0; $index < $key; $index++) {

                $minHeap->insert($arr[$index]);
            }

            if ($key === 1) {
                $temp = $minHeap->extract();
                $maiden [] = $temp;
                continue;
            }

            if ($key === 2) {
                $temp = floor(($minHeap->extract() + $minHeap->extract()) / 2);
                $maiden [] = $temp;
                continue;
            }

            if ($key % 2 === 0) {
                for ($i = 0; $i < ($key / 2) - 1; $i++) {
                    $minHeap->extract();
                }
                $temp = floor(($minHeap->extract() + $minHeap->extract()) / 2);
            } else {

                for ($i = 0; $i < floor($key / 2); $i++) {
                    $minHeap->extract();
                }

                $temp = $minHeap->extract();

            }

            $maiden [] = $temp;

        }
        return $maiden;
    }
}