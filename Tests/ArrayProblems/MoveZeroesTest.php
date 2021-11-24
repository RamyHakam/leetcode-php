<?php

namespace ArrayProblems;

use Hakam\LeetCodePhp\ArrayProblems\MoveZeroes;
use Hakam\LeetCodePhp\Tests\Helper\MainTest;

/**
 * @covers \Hakam\LeetCodePhp\ArrayProblems\MoveZeroes
 */
class MoveZeroesTest extends MainTest
{
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $moveZeroes = new MoveZeroes();
        $moveZeroes->moveZeroes($inputData);
        self::assertEmpty(array_diff($expectedResult,$inputData));
    }
}