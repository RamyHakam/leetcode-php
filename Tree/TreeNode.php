<?php

namespace Hakam\LeetCodePhp\Tree;

/**
 * * @codeCoverageIgnore
 */
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    /**
     * @param int $val
     * @param null $left
     * @param null $right
     * @codeCoverageIgnore
     */
    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}