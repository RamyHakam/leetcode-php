<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\FlattenBinaryTreeToLinkedList;
use Hakam\LeetCodePhp\Tree\TreeNode;

class FlattenBinaryTreeToLinkedListTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $flattenBinary = new FlattenBinaryTreeToLinkedList();
        $flattenBinary->flatten($tree);
        $list = $this->getArrayFromTreeNode($tree);
        self::assertEmpty(array_diff(array_filter($expectedResult),$list));
    }

    private function getArrayFromTreeNode(TreeNode $treeNode)
    {
        $list = [];
        while ($treeNode !== null)
        {
            $list [] = $treeNode->val;
            $treeNode = $treeNode->right;
        }
        return $list;
    }
}