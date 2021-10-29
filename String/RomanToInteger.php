<?php

namespace Hakam\LeetCodePhp\String;

class RomanToInteger
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanValues = [ 'I' =>1,'V' => 5,'X' =>10 ,'L'=>50 ,'C' => 100 ,'D' => 500,'M'=>1000];
        $intValue = 0;
        for($index = strlen($s)-1;$index>=0;$index--)
        {
            $valueMines = 0;
            $valueAdded = $s[$index];
            if(($s[$index] === 'V' || $s[$index] === 'X') && $s[$index-1] === 'I' & $index > 0 )
            {
                $valueMines = $romanValues['I'];
                $index--;
            }

            elseif(($s[$index] === 'L' || $s[$index] === 'C') && $s[$index-1] === 'X' && $index > 0 )
            {
                $valueMines = $romanValues['X'];
                $index--;
            }

            elseif(($s[$index] === 'D' || $s[$index] === 'M') && $s[$index-1] === 'C' && $index > 0 )
            {
                $valueMines = $romanValues['C'];
                $index--;
            }

            $intValue += $romanValues[$valueAdded] - $valueMines;
        }
        return $intValue;
    }
}