<?php

namespace Hakam\LeetCodePhp\Heap;

use SplPriorityQueue;

class TopKFrequentElements
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {

        $hashMap = [];
        $heap = new PQ();
        foreach ($nums as $num) {
            if(isset($hashMap[$num]))
            {
                ++$hashMap[$num];
            }
            else {
                $hashMap[$num]= 1;
            }
        }
        foreach ($hashMap as $key => $value) {
            $heap->insert($key, $value);
            if ($heap->count() > $k) {
            }
        }

        while (!$heap->isEmpty()) {
            $list [] = $heap->extract();
        }

        return $list;
    }
}

class PQ extends SplPriorityQueue
{
    public function compare($priority1, $priority2): int
    {
          if($priority1 === $priority2) {
              return 0;
          }
        return $priority1 < $priority2 ? 1 : -1;
    }
}