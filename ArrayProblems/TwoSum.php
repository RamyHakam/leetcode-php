<?php

namespace Hakam\LeetCodePhp\ArrayProblems;

/**
 * LeetCode Problem Link: https://leetcode.com/problems/two-sum
 */
class TwoSum
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum(array $nums, int $target): array
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