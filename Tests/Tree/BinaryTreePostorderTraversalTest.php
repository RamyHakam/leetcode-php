<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\BinaryTreePostorderTraversal;

/**
 * @covers \Hakam\LeetCodePhp\Tree\BinaryTreePostorderTraversal
 */
class BinaryTreePostorderTraversalTest extends MainTest
{
    use TreeHelperTrait;

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $postorderTraversal = new BinaryTreePostorderTraversal();
        $result = $postorderTraversal->postorderTraversalBYRecursion($tree);
        self::assertEmpty(array_diff($result, $expectedResult));
    }


    /**
     * @dataProvider provideData
     */
    public function testWithDataListByIteration($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $preorderTraversal = new BinaryTreePostorderTraversal();
        $result = $preorderTraversal->postorderTraversalBYIneration($tree);
        self::assertEmpty(array_diff($result, $expectedResult));
    }

}