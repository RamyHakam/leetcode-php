<?php

namespace Hakam\LeetCodePhp\Tree;

class DiameterOfBinaryTree
{
    private int $diameter = 0;

    function diameterOfBinaryTree(TreeNode $root): int
    {
        $this->getMaxPathLength($root);
        return $this->diameter;
    }

    private function getMaxPathLength(?TreeNode $node)
    {
        if ($node === null) {
            return 0;
        }

        $leftPathLength = $this->getMaxPathLength($node->left);
        $rightPathLength = $this->getMaxPathLength($node->right);

        $this->diameter = max($this->diameter, $leftPathLength + $rightPathLength);
        return 1+ max($rightPathLength, $leftPathLength);
    }
}