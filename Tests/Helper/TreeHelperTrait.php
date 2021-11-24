<?php

namespace Hakam\LeetCodePhp\Tests\Helper;

use Hakam\LeetCodePhp\Tree\TreeNode;

/**
 * @codeCoverageIgnore
 */
trait TreeHelperTrait
{
    private  $list = [];

    /**
     * @param array|null $treeList
     * @return TreeNode
     * @codeCoverageIgnore
     */
    protected function createBinaryTree(?array $treeList)
    {
        $this->list = $treeList['tree']['nodes'];
        return $this->createTreeNode($this->findNodeById($treeList['tree']['root']));
    }

    /**
     * @param array $nodeData
     * @return TreeNode
     * @codeCoverageIgnore
     */

    private function createTreeNode(array $nodeData)
    {
        $nodeRoot = new TreeNode($nodeData['value']);
        if ($nodeData['left'] !== null) {
            $nodeRoot->left = $this->createTreeNode(
                $this->findNodeById($nodeData['left']));
        }
        if ($nodeData['right'] !== null) {
            $nodeRoot->right = $this->createTreeNode(
                $this->findNodeById($nodeData['right']));
        }
        return $nodeRoot;
    }


    private function findNodeById( string $id)
    {
      $node =  array_filter($this->list, static function ($nodeData) use ($id) {
            if($id === $nodeData['id'])
            {
                return $nodeData;
            }
        });

      return array_shift($node);
    }
}