<?php

namespace Hakam\LeetCodePhp\Tree;

/**
 * LeetCode Problem Link : https://leetcode.com/problems/binary-tree-level-order-traversal
 */
class BinaryTreeLevelOrderTraversal
{
    /**
     * @param TreeNode|null $root
     * @return Integer[][]
     */

    public function levelOrder(?TreeNode $root): array
    {
        if($root === null)
        {
            return [];
        }
        $bFT = [];
        $tQ = [];
        $tQ [] = [$root,0];

        while(count($tQ) !== 0)
        {
            [$node,$nodeLevel] = array_shift($tQ); //level 0
            $bFT[$nodeLevel][] = $node->val;
            if($node->left !== null) {$tQ[] = [$node->left,$nodeLevel+1];}
            if($node->right !== null) {$tQ[] = [$node->right,$nodeLevel+1];}
        }
        return $bFT;
    }
}