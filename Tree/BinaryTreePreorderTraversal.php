<?php

namespace Hakam\LeetCodePhp\Tree;

class BinaryTreePreorderTraversal
{
    /**
     * @param TreeNode|null $root
     * @return Integer[]
     */
    function preorderTraversalBYRecursion(?TreeNode $root): array
    {
        if ($root === null) {
            return [];
        }

        $list [] = $root->val;
        if ($root->left !== null) {
            $list = array_merge($list, $this->preorderTraversalBYRecursion($root->left));
        }
        if ($root->right !== null) {
            $list = array_merge($list, $this->preorderTraversalBYRecursion($root->right));
        }
        return $list;
    }


    public function preorderTraversalBYIneration(?TreeNode $treeNode)
    {
        if ($treeNode === null) {
            return [];
        }
        $stack [] = $treeNode;
        $list = [];
        while (count($stack) !== 0) {
            $currentNode = array_pop($stack);
            $list [] = $currentNode->val;
            if ($currentNode->left !== null) {
                $stack [] = $currentNode->left;
            }

            if ($currentNode->left !== null) {
                $stack [] = $currentNode->right;
            }
        }
        return $list;
    }
}