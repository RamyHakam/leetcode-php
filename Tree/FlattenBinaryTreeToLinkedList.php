<?php

namespace Hakam\LeetCodePhp\Tree;

class FlattenBinaryTreeToLinkedList
{
    /**
     * @param TreeNode $root
     * @return void
     */
    public function flatten(TreeNode $root): void
    {
        $this->getPreOrderLinkedList($root);
    }

    private function getPreOrderLinkedList( ?TreeNode $node): ?TreeNode
    {
        if($node === null)
        {
           return null;
        }
        if ($node->right === null && $node->left === null) {
            return $node;
        }

        $leftTail = $this->getPreOrderLinkedList($node->left);
        $rightTail = $this->getPreOrderLinkedList($node->right);

        if ($leftTail !== null) {
            $leftTail->right = $node->right;
            $node->right = $node->left;
            $node->left = null;
        }
        return $rightTail ?? $leftTail;
    }
}