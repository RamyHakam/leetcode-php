<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\DiameterOfBinaryTree;

/**
 * @covers \Hakam\LeetCodePhp\Tree\DiameterOfBinaryTree
 */
class DiameterOfBinaryTreeTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $diameter = new DiameterOfBinaryTree();
        self::assertEquals($expectedResult,$diameter->diameterOfBinaryTree($tree));
    }
}