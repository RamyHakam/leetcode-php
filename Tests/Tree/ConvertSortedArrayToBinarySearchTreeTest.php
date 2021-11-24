<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tree\ConvertSortedArrayToBinarySearchTree;
use Hakam\LeetCodePhp\Tree\TreeNode;
use Hakam\LeetCodePhp\Tree\ValidateBinarySearchTree;

/**
 * @covers \Hakam\LeetCodePhp\Tree\ConvertSortedArrayToBinarySearchTree
 */
class ConvertSortedArrayToBinarySearchTreeTest extends MainTest
{

    /**
     * @dataProvider provideData
     * @covers \Hakam\LeetCodePhp\Tree\ConvertSortedArrayToBinarySearchTree::sortedArrayToBST
     * @covers \Hakam\LeetCodePhp\Tree\ConvertSortedArrayToBinarySearchTree::createTreeNode
     * @covers   \Hakam\LeetCodePhp\Tree\ValidateBinarySearchTree::validate()
     * @covers   \Hakam\LeetCodePhp\Tree\ValidateBinarySearchTree::isValidBST()
     * @covers   \Hakam\LeetCodePhp\Tree\ValidateBinarySearchTree
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
       $convertSortedArrayToBST = new ConvertSortedArrayToBinarySearchTree();
       $result = $convertSortedArrayToBST->sortedArrayToBST($inputData);
       self::assertEquals($expectedResult,$this->validatedBSTFromBSTSolution($result));
    }

    /**
     * @param TreeNode $treeNode
     * @return bool
     */
    private function validatedBSTFromBSTSolution(TreeNode $treeNode): bool
    {
        $treeValidator = new ValidateBinarySearchTree();
        return $treeValidator->isValidBST($treeNode);

    }
}