<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

class MergeIntervals
{
    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        usort($intervals,function($i,$j){
            if($i[0] === $j[0])
            {
                return 0;
            }
            return $i[0]<$j[0]? -1:1;
        });
        $list = [];
        foreach($intervals as $interval)
        {
            if(count($list) === 0|| end($list)[1]<$interval[0])
            {
                $list [] = $interval;
            }
            else {
                $newInterval = array_pop($list);
                $newInterval[1] =  max($newInterval[1],$interval[1]);
                $list [] = $newInterval;
            }
        }
        return $list;
    }
}