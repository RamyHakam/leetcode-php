<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\BinaryTreePaths;

/**
 * @covers \Hakam\LeetCodePhp\Tree\BinaryTreePaths
 */
class BinaryTreePathsTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
       $tree = $this->createBinaryTree($inputData);
       $binaryPaths = new BinaryTreePaths();
       self::assertEmpty(array_diff($expectedResult,$binaryPaths->binaryTreePaths($tree)));
    }
}