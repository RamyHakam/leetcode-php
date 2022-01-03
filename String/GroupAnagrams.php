<?php

namespace Hakam\LeetCodePhp\String;

class GroupAnagrams
{
    /**
     * @return String[][]
     */
    private array $hashList = [];

    public function groupAnagrams(array $stringsList): array
    {
        foreach ($stringsList as $str) {
            $strList = str_split($str);
            sort($strList);
            $sorted = implode($strList);
            if (isset($this->hashList[$sorted])) {
                $this->hashList[$sorted][] = $str;
            } else {
                $this->hashList [$sorted] = [$str];
            }
        }
        return array_values($this->hashList);
    }
}
