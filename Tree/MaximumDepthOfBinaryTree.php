<?php

namespace Hakam\LeetCodePhp\Tree;

class MaximumDepthOfBinaryTree
{
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root): int
    {
        if($root === null)
        {
            return 0;
        }
        return max($this->maxDepth($root->left)+1,$this->maxDepth($root->right)+1);
    }
}