<?php

namespace Hakam\LeetCodePhp\Tree;

class SymmetricTree
{
    /**
     * @param TreeNode|null $root
     * @return Boolean
     */
    public function isSymmetric(?TreeNode $root): bool
    {
        if ($root === null) {
            return true;
        }
        return $this->helper($root->left, $root->right);
    }

    private function helper(?TreeNode $tree1, ?TreeNode $tree2): bool
    {

        if ($tree1 === null && $tree2 === null) {
            return true;
        }

        if (($tree1 === null && $tree2 !== null) || ($tree1 !== null && $tree2 === null)) {
            return false;
        }

        if ($tree1->val === $tree2->val) {
            return
                $this->helper($tree1->left, $tree2->right) &&
                $this->helper($tree1->right, $tree2->left);
        }
        return false;
    }
}