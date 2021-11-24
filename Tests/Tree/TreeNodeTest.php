<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tree\TreeNode;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Hakam\LeetCodePhp\Tree\TreeNode
 */
class TreeNodeTest extends TestCase
{
    public function testCanCreateaTree()
    {
        $tree = new TreeNode(10,new TreeNode(7),new TreeNode(3));
        self::assertInstanceOf(TreeNode::class,$tree);
        self::assertInstanceOf(TreeNode::class,$tree->left);
        self::assertInstanceOf(TreeNode::class,$tree->right);
    }
}