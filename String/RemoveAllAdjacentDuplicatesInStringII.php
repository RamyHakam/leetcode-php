<?php

namespace Hakam\LeetCodePhp\String;

class RemoveAllAdjacentDuplicatesInStringII
{
    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    private $dublicateCount;

    function removeDuplicates($s, $k)
    {

        for ($index = 0; $index < strlen($s); $index++) {
            if (isset($s[$index - 1]) && $s[$index] === $s[$index - 1]) {
                if (isset($this->dublicateCount[$s[$index]])) {
                    $this->dublicateCount[$s[$index]] .= $s[$index];
                }else {
                    $this->dublicateCount[$s[$index]] = $s[$index];
                }
            } else {
                $this->dublicateCount[$s[$index]] = $s[$index];
            }
            if (
                isset($this->dublicateCount[$s[$index]]) &&
                strlen($this->dublicateCount[$s[$index]]) >= $k) {
                $stringToDelete = $this->dublicateCount[$s[$index]];
                unset($this->dublicateCount[$s[$index]]);
                $s = str_replace($stringToDelete, '', $s);
                $index -= $k;
            }
        }
        return $s;
    }
}