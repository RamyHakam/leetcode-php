<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\CountUniValueSubtrees;

/**
 * @covers \Hakam\LeetCodePhp\Tree\CountUniValueSubtrees
 */
class CountUniValueSubtreesTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     * @covers \Hakam\LeetCodePhp\Tree\CountUniValueSubtrees::countUnivalSubtrees
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $countUniValue = new CountUniValueSubtrees();
        self::assertEquals($expectedResult,$countUniValue->countUnivalSubtrees($tree));
    }
}