<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\LongestSubstringWithAtMostKDistinctCharacters;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\String\LongestSubstringWithAtMostKDistinctCharacters
 */
class LongestSubstringWithAtMostKDistinctCharactersTest extends MainTest
{

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $findLongestSubString = new LongestSubstringWithAtMostKDistinctCharacters();
        self::assertEquals($expectedResult,$findLongestSubString->lengthOfLongestSubstringKDistinct(...$inputData));
    }
}