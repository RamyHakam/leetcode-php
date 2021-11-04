<?php

namespace Hakam\LeetCodePhp\Tree;

class BinaryTreePostorderTraversal
{
    /**
     * @param TreeNode|null $root
     * @return Integer[]
     */
    function postorderTraversalBYRecursion(?TreeNode $root): array
    {
        if ($root === null) {
            return [];
        }

        if ($root->left !== null) {

            $list [] = $this->postorderTraversalBYRecursion($root->left);
        }
        if ($root->right !== null) {
            $list [] =  $this->postorderTraversalBYRecursion($root->right);
        }
        $list [] = [$root->val];

        return array_merge(...$list);
    }


    public function postorderTraversalBYIneration(?TreeNode $treeNode)
    {
        if ($treeNode === null) {
            return [];
        }
        $stack [] = $treeNode;
        $list = [];
        while (count($stack) !== 0) {
            $currentNode = array_pop($stack);

            if ($currentNode->left !== null) {
                $stack [] = $currentNode->left;
            }

            if ($currentNode->left !== null) {
                $stack [] = $currentNode->right;
            }
            $list [] = $currentNode->val;
        }
        return $list;
    }

}