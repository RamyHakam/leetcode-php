<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\ValidPalindromeII;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\String\ValidPalindromeII
 */
class ValidPalindromeIITest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $validatePalindrome = new ValidPalindromeII();
        self::assertEquals($expectedResult,$validatePalindrome->validPalindrome($inputData));
    }
}