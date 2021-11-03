<?php

namespace Hakam\LeetCodePhp\Tree;

class ConvertSortedArrayToBinarySearchTree
{
    private array $nums;

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums)
    {

        $this->nums = $nums;
        return $this->createTreeNode(0, count($nums) - 1);

    }

    function createTreeNode($left, $right)
    {
        if ($left > $right) {
            return null;
        }

        $rootIndex = (int)(($left + $right) / 2);
        //PreOrders
        $rootNode = new TreeNode($this->nums[$rootIndex]);
        $rootNode->left = $this->createTreeNode($left, $rootIndex - 1);
        $rootNode->right = $this->createTreeNode($rootIndex + 1, $right);

        return $rootNode;
    }
}