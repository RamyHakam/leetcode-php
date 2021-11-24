<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\ValidPalindrome;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\String\ValidPalindrome
 */
class ValidPalindromeTest extends MainTest
{

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $validatePalindrome = new ValidPalindrome();
        self::assertEquals($expectedResult,$validatePalindrome->isPalindromeByIteration($inputData));
    }
}