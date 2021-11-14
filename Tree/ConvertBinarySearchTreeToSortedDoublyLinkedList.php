<?php

namespace Hakam\LeetCodePhp\Tree;

class ConvertBinarySearchTreeToSortedDoublyLinkedList
{
    private $head;
    private $preNode;

    function treeToDoublyList($root)
    {
        if ($root == null) {
            return null;
        }
        $this->helper($root);
        $this->preNode->right = $this->head;
        $this->head->left = $this->preNode;
        return $this->head;
    }

    private function helper($node)
    {
        if ($node !== null) {
            $this->helper($node->left);
            if ($this->preNode != null) {
                $this->preNode->right = $node;
                $node->left = $this->preNode;
            } else {
                $this->head = $node;
            }
            $this->preNode = $node;
            $this->helper($node->right);
        }
    }
}