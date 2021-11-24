<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\BinaryTreePreorderTraversal;

/**
 * @covers \Hakam\LeetCodePhp\Tree\BinaryTreePreorderTraversal
 */
class BinaryTreePreorderTraversalTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree=$this->createBinaryTree($inputData);
        $preorderTraversal = new BinaryTreePreorderTraversal();
        $result = $preorderTraversal->preorderTraversalBYRecursion($tree);
        self::assertEmpty(array_diff($result,$expectedResult));
    }


    /**
     * @dataProvider provideData
     */
    public function testWithDataListByIteration($expectedResult, $inputData): void
    {
        $tree=$this->createBinaryTree($inputData);
        $preorderTraversal = new BinaryTreePreorderTraversal();
        $result = $preorderTraversal->preorderTraversalBYIneration($tree);
        self::assertEmpty(array_diff($result,$expectedResult));
    }
}