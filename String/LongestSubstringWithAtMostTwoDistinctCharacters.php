<?php

namespace Hakam\LeetCodePhp\String;

class LongestSubstringWithAtMostTwoDistinctCharacters
{
    /**
     * @param String $s
     * @return Integer
     */
    public function lengthOfLongestSubstringTwoDistinct( string $s): int
    {
        if (strlen($s) <= 2) {
            return strlen($s);
        }

        $hashList = [];
        $left = 0;
        $right = 0;
        $maxLength = 0;

        while ($right < strlen($s)) {
            $hashList [$s[$right]] = $right;
            $right++;
            if (count($hashList) === 3) {
                $del_index = min(array_values($hashList));
                unset($hashList[$s[$del_index]]);
                $left = $del_index + 1;
            }
            $maxLength = max($maxLength, $right - $left);
        }
        return $maxLength;
    }
}