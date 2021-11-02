<?php

namespace Hakam\LeetCodePhp\String;

class ValidPalindrome
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindromeByIteration( string $s) {
        $s = preg_replace("/[^A-Za-z0-9 ]/", '', $s);
        $s = str_replace(" ","",$s);
        $s = strtolower($s);
        if($s === ""){
            return true;
        }

        $right = strlen($s)-1;

        for($left = 0, $leftMax = strlen($s); $left< $leftMax; $left ++){
                if($s[$right] !== $s[$left] && $left <=$right){
                    return false;
                }
                if($left === $right)
                {
                    return true;
                }
                --$right;
        }
        return  true;
    }
}