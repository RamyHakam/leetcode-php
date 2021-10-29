<?php

namespace Hakam\LeetCodePhp\String;

class StringToInteger
{

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        $s = trim($s);
        $min_rang = -2147483648;
        $max_rang = 2147483647;
        $sign = "+";
        if ($s[0] === '-' || $s[0] === '+') {
            $sign = $s[0];
            $s = substr($s, 1);
        }
        $number = $sign;
        for ($i = 0, $iMax = strlen($s); $i < $iMax; $i++) {
            if (!is_numeric($s[$i])) {
                return (int)$number;
            }
            $number .= $s[$i];

            if (max($min_rang, min($max_rang, $number)) !== $number) {
                return $number;
            }
        }
        return (int)$number;
    }

}