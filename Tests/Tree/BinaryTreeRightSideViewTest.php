<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\BinaryTreeRightSideView;

class BinaryTreeRightSideViewTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $rightSideView = new BinaryTreeRightSideView();
       self::assertEmpty(array_diff($expectedResult,$rightSideView->rightSideView($tree)));
    }


}