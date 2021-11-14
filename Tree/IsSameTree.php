<?php

namespace Hakam\LeetCodePhp\Tree;

class IsSameTree
{
    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q): bool
    {

        if (($p !== null && $q === null) || ($p === null && $q !== null)) {
            return false;
        }

        if ($p === null && $q === null) {
            return true;
        }

        if ($p->val === $q->val) {
            return $this->isSameTree($p->left, $q->left) &&
                $this->isSameTree($p->right, $q->right);
        }
    }
}