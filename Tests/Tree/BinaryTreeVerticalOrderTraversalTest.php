<?php

namespace Hakam\LeetCodePhp\Tests\Tree;

use Hakam\LeetCodePhp\Tests\Helper\MainTest;
use Hakam\LeetCodePhp\Tests\Helper\TreeHelperTrait;
use Hakam\LeetCodePhp\Tree\BinaryTreeVerticalOrderTraversal;

class BinaryTreeVerticalOrderTraversalTest extends MainTest
{
    use TreeHelperTrait;
    /**
     * @dataProvider provideData
     */
    public function testWithDataList($expectedResult, $inputData): void
    {
      $tree =  $this->createBinaryTree($inputData);
      $verticalOrder = new BinaryTreeVerticalOrderTraversal();
      $result = $verticalOrder->verticalOrder($tree);
      while (count($expectedResult) !== 0 )
      {
          $value = array_diff(array_shift($expectedResult),array_shift($result));
          self::assertEmpty($value);
      }
    }
}