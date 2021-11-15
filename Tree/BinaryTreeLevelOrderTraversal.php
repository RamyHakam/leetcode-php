<?php

namespace Hakam\LeetCodePhp\Tree;

use SplQueue;

class BinaryTreeLevelOrderTraversal
{
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */

    public function levelOrder($root): array
    {
        if($root === null)
        {
            return [];
        }
        $bFT = [];
        $tQ = [];
        $tQ [] = [$root,0];
        $level = 0;

        while(count($tQ) !== 0)
        {
            [$node,$nodeLevel] = array_shift($tQ); //level 0
            $bFT[$nodeLevel][] = $node->val;
            $level = $nodeLevel;
            ++$level;
            if($node->left !== null) {$tQ[] = [$node->left,$level];}
            if($node->right !== null) {$tQ[] = [$node->right,$level];}

        }
        return $bFT;
    }
}