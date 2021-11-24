<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\FindAllAnagramsInAString;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\String\FindAllAnagramsInAString
 */
class FindAllAnagramsInAStringTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $findAllAnagrams = new FindAllAnagramsInAString();
        self::assertEmpty(array_diff($expectedResult,$findAllAnagrams->findAnagrams(...$inputData)));
    }
}