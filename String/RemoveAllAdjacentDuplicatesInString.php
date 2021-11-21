<?php

namespace Hakam\LeetCodePhp\String;

class RemoveAllAdjacentDuplicatesInString
{

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s)
    {
        $stack = [null];
        for ($index = 0, $indexMax = strlen($s); $index < $indexMax; $index++) {

            if (end($stack) === $s[$index]) {
                array_pop($stack);
            } else {
                $stack [] = $s[$index];
            }
        }
        return implode('', $stack);
    }
}