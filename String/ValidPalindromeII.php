<?php

namespace Hakam\LeetCodePhp\String;

class ValidPalindromeII
{
    /**
     * @param String $s
     * @return Boolean
     */

    public function validPalindrome($s): bool
    {
        $right = strlen($s) - 1;
        $left = 0;
        while ($left < $right) {
            if ($s[$left] !== $s[$right]) {
                return $this->isPalindrome($s, $left + 1, $right) || $this->isPalindrome($s, $left, $right - 1);
            }
            $left++;
            $right--;
        }
        return true;
    }

    private function isPalindrome($s, $i, $j): bool
    {
        while ($i < $j) {
            if ($s[$i++] !== $s[$j--]) {
                return false;
            }
        }
        return true;
    }
}