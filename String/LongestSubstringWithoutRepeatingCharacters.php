<?php

namespace Hakam\LeetCodePhp\String;

class LongestSubstringWithoutRepeatingCharacters
{
    public function lengthOfLongestSubstring(string $s)
    {
        if (strlen($s) === 1) {
            return 1;
        }
        $result = 0;
        $longestSubStringList = [];
        for ($index = 0, $indexMax = strlen($s); $index < $indexMax; $index++) {
            foreach ($longestSubStringList as $value) {
                if (isset($longestSubStringList[$s[$index]])) {
                    array_shift($longestSubStringList);
                }
            }
            $longestSubStringList[$s[$index]] = $s[$index];
            $result = max($result, count($longestSubStringList));
        }
        return $result;
    }
}