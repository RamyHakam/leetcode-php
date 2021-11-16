<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\PathSum;

class PathSumTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
        $tree = $this->createBinaryTree($inputData);
        $pathSum = new PathSum();
        self::assertEquals($expectedResult,$pathSum->hasPathSum($tree,$inputData['sum']));
    }
}