<?php

namespace Hakam\LeetCodePhp\String;

class LongestSubstringWithAtMostKDistinctCharacters
{
    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    public function lengthOfLongestSubstringKDistinct($s, $k)
    {
        if ($k === 0) {
            return 0;
        }

        $hashList = [];
        $left = 0;
        $right = 0;
        $maxLength = 0;
        while($right < strlen($s))
        {
            $hashList[$s[$right]] = $right++;
            if(count($hashList) >$k)
            {
                $del_index = min(array_values($hashList));
                unset($hashList[$s[$del_index]]);
                $left = $del_index+1;
            }
            $maxLength = max ($maxLength,$right-$left);
        }
        return $maxLength;
    }
}