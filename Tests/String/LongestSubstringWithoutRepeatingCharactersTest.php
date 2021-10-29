<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\LongestSubstringWithoutRepeatingCharacters;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class LongestSubstringWithoutRepeatingCharactersTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $longestSubString = new LongestSubstringWithoutRepeatingCharacters();
        self::assertEquals($expectedResult,$longestSubString->lengthOfLongestSubstring($inputData));
    }
}