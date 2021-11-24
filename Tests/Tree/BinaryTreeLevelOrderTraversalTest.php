<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\BinaryTreeLevelOrderTraversal;

/**
 * @covers \Hakam\LeetCodePhp\Tree\BinaryTreeLevelOrderTraversal
 */
class BinaryTreeLevelOrderTraversalTest extends MainTest
{
   use TreeHelperTrait;

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $binaryTreeLevelOrder = new BinaryTreeLevelOrderTraversal();
        $result = $binaryTreeLevelOrder->levelOrder($tree);
        self::assertEmpty(array_diff(array_merge(...$expectedResult),array_merge(...$result)));
    }
}