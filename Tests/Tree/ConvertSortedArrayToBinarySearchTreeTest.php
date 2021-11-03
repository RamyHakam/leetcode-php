<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tree\ConvertSortedArrayToBinarySearchTree;
use Hakam\LeetCodePhp\Tree\TreeNode;
use Hakam\LeetCodePhp\Tree\ValidateBinarySearchTree;

class ConvertSortedArrayToBinarySearchTreeTest extends MainTest
{

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
       $convertSortedArrayToBST = new ConvertSortedArrayToBinarySearchTree();
       $result = $convertSortedArrayToBST->sortedArrayToBST($inputData);
       self::assertEquals($expectedResult,$this->validatedBSTFromBSTSolution($result));
    }

    private function validatedBSTFromBSTSolution(TreeNode $treeNode): bool
    {
        $treeValidator = new ValidateBinarySearchTree();
        return $treeValidator->isValidBST($treeNode);

    }
}