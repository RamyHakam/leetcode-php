<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\ValidateBinarySearchTree;

class ValidateBinarySearchTreeTest extends MainTest
{
    use TreeHelperTrait;

    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
       $tree=$this->createBinaryTree($inputData);
       $validateBT = new ValidateBinarySearchTree();
       self::assertEquals($expectedResult,$validateBT->isValidBST($tree));
    }
}