<?php

namespace Hakam\LeetCodePhp\String;

class FindAllAnagramsInAString
{

    /**
     * @param String $s
     * @param String $p
     * @return Integer[]
     */
    private $list = [];

    function findAnagrams($s, $p)
    {

        if (strlen($p) > strlen($s)) {
            return [];
        }
        $phash = [];
        $sHash = [];
        for ($index = 0, $indexMax = strlen($p); $index < $indexMax; $index++) {
            $phash[$p[$index]] = isset($phash[$p[$index]]) ? ++$phash[$p[$index]] : 1;
        }

        for ($index = 0, $indexMax = strlen($s); $index < $indexMax; $index++) {
            $subString = substr($s, $index, strlen($p));
            if(strlen($subString)<strlen($p))
            {
                return $this->list;
            }

            if (count($sHash) > 0) {
                if(isset($sHash[$s[$index-1]]) && $sHash[$s[$index-1]]>1)
                {
                    --$sHash[$s[$index-1]];
                }
                else {
                   unset($sHash[$s[$index-1]]);
                }

                if (isset($sHash[$subString[strlen($p) - 1]])) {
                    ++$sHash[$subString[strlen($p) - 1]];
                } else {
                    $sHash[$subString[strlen($p) - 1]] = 1;
                }

            } else {
                for ($i = 0, $iMax = strlen($p); $i < $iMax; $i++) {
                    $sHash[$subString[$i]] = isset($sHash[$subString[$i]]) ? ++$sHash[$subString[$i]] : 1;
                }
            }

            if ($sHash == $phash) {
                $this->list [] = $index;
            }
        }
        return $this->list;
    }
}