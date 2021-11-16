<?php

namespace Hakam\LeetCodePhp\Tree;

class CountUniValueSubtrees
{
    /**
     * @param TreeNode $root
     * @return Integer
     */
    private int $count = 0;

    public function countUnivalSubtrees($root): int
    {
        if ($root === null) {
            return 0;
        }
        $this->getUni($root);
        return $this->count;
    }

    private function getUni($root): bool
    {
        if ($root->left === null && $root->right === null) {
            ++$this->count;
            return true;
        }

        $leftUni = true;
        $rightUni = true;
        if ($root->left !== null) {
            $leftUni = $this->getUni($root->left) && $root->left->val == $root->val;
        }

        if ($root->right !== null) {
            $rightUni = $this->getUni($root->right) && $root->right->val == $root->val;
        }

        if (!($leftUni && $rightUni)) {
            return false;
        }
        ++$this->count;
        return true;
    }
}