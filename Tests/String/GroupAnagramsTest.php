<?php

namespace Hakam\LeetCodePhp\Tests\String;

use Hakam\LeetCodePhp\String\GroupAnagrams;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

class GroupAnagramsTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $groupAnagrams = new GroupAnagrams();
        $result = $groupAnagrams->groupAnagrams($inputData);
        foreach ($result as $item) {
            self::assertContains($item, $expectedResult);
        }
    }
}