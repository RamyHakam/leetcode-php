<?php

namespace Hakam\LeetCodePhp\Tests\LinkedList;

use Hakam\LeetCodePhp\LinkedList\ReverseLinkedListII;
use Hakam\LeetCodePhp\Tests\Helper\LinkedListHelperTrait;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\LinkedList\ReverseLinkedListII
 */
class ReverseLinkedListIITest extends MainTest
{
    use LinkedListHelperTrait;

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $reversList = new ReverseLinkedListII();
        $list = $this->convertFromArray($inputData[0]);
        self::assertEmpty(array_diff($expectedResult,
            $this->convertToArray($reversList->reverseBetween($list,$inputData[1],$inputData[2]))));
    }
}