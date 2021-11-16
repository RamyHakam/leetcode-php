<?php

namespace Hakam\LeetCodePhp\Tree;

class PathSum
{
    /**
     * @param TreeNode $root
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum): bool
    {
        if($root === null) {return false;}
        if($root->left === null && $root->right === null && $root->val ==$targetSum){return true;}
        $leftSum = $this->hasPathSum($root->left,$targetSum-$root->val);
        $rightSum = $this->hasPathSum($root->right,$targetSum-$root->val);
        return  $leftSum || $rightSum ;
    }
}