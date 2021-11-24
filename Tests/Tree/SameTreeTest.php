<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\SameTree;

class SameTreeTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree1 = $this->createBinaryTree($inputData['tree1']);
        $tree2 = $this->createBinaryTree($inputData['tree2']);
        $sameTree = new SameTree();
        self::assertEquals($expectedResult,$sameTree->isSameTree($tree1,$tree2));
    }
}