<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

class TwoSum
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target): array
    {
       $hashList = [];
       foreach ($nums as $key => $num)
       {
           if(isset($hashList[$target-$num]) && $hashList[$target-$num] !== $key)
           {
               return [$key,$hashList[$target-$num]];
           }
               $hashList[$num] =$key;
       }
       return  [];
    }
}