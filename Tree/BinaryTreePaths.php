<?php

namespace Hakam\LeetCodePhp\Tree;

class BinaryTreePaths
{
    private array $leafPaths = [];

    /**
     * @param TreeNode $root
     * @return String[]
     */
    function binaryTreePaths($root): array
    {
        $this->findLeafPath($root,'');
        return $this->leafPaths;
    }

    public function findLeafPath($node, $path)
    {
        if($node === null) {
            return;
        }
        if($node->left === null && $node->right === null)
        {
            $path .= $node->val;
            $this->leafPaths [] = $path;
            return;
        }
        $path .= $node->val."->";

        if($node->left !== null)
        {
            $this->findLeafPath($node->left,$path);
        }
        if($node->right !== null)
        {
            $this->findLeafPath($node->right,$path);
        }
    }
}