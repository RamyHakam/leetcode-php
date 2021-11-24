<?php

namespace ArrayProblems;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tree\IntegerToEnglishWords;

/**
 * @covers \Hakam\LeetCodePhp\Tree\IntegerToEnglishWords
 */
class IntegerToEnglishWordsTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $integerToEnglish = new IntegerToEnglishWords();
        $word = $integerToEnglish->numberToWords($inputData);
        self::assertEquals($expectedResult, $word);
    }
}