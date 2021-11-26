<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\LongestSubstringWithAtMostTwoDistinctCharacters;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\String\LongestSubstringWithAtMostTwoDistinctCharacters
 */
class LongestSubstringWithAtMostTwoDistinctCharactersTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $findLongestSubString = new LongestSubstringWithAtMostTwoDistinctCharacters();
        self::assertEquals($expectedResult,$findLongestSubString->lengthOfLongestSubstringTwoDistinct($inputData[0]));
    }
}