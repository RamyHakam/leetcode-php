<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\MaximumDepthOfBinaryTree;

/**
 * @covers \Hakam\LeetCodePhp\Tree\MaximumDepthOfBinaryTree
 */
class MaximumDepthOfBinaryTreeTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $maxDepth = new MaximumDepthOfBinaryTree();

        self::assertEquals($expectedResult, $maxDepth->maxDepth($tree));
    }

}