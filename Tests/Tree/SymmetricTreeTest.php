<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\SymmetricTree;

/**
 * @covers \Hakam\LeetCodePhp\Tree\SymmetricTree
 */
class SymmetricTreeTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     * @covers \Hakam\LeetCodePhp\Tree\SymmetricTree::isSymmetric
     * @covers \Hakam\LeetCodePhp\Tree\SymmetricTree::helper
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $symmetric = new SymmetricTree();
        self::assertEquals($expectedResult,$symmetric->isSymmetric($tree));
    }
}