<?php

namespace Hakam\LeetCodePhp\Tree;

class BinaryTreeRightSideView
{
    private $rightSide = [];

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function rightSideView($root): array
    {

        $this->getViewNode($root, 0);
        return $this->rightSide;
    }

    function getViewNode($node, $level)
    {
        if ($node === null) {
            return [];
        }
        if ($level === count($this->rightSide)) {
            $this->rightSide [] = $node->val;
        }

        if ($node->right !== null) {
            $this->getViewNode($node->right, $level + 1);
        }
        if ($node->left !== null) {
            $this->getViewNode($node->left, $level + 1);
        }
    }
}