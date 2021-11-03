<?php

namespace Hakam\LeetCodePhp\Tree;

class ValidateBinarySearchTree
{
    public function isValidBST(TreeNode $treeNode): bool
    {
       return $this->validate($treeNode,PHP_INT_MIN,PHP_INT_MAX);
    }

    private function validate(?TreeNode $node, ?int $min, ?int $max): bool
    {
        if ($node === null) {
            return true;
        }
        if ($node->val < $min || $node->val >= $max) {
            return false;
        }
        return $this->validate($node->left, $min, $node->val) && $this->validate($node->right, $node->val, $max);
    }
}