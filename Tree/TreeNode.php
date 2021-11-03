<?php

namespace Hakam\LeetCodePhp\Tree;

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}