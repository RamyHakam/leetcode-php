<?php

namespace Hakam\LeetCodePhp\Tree;

class BinaryTreeVerticalOrderTraversal
{
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    private array $order = [];
    private array $queue = [];

    public function verticalOrder($root): array
    {
        if ($root === null) {
            return [];
        }

        $this->queue [] = [$root, 0];

        while (count($this->queue) !== 0) {
            [$node, $index] = array_shift($this->queue);
            $this->order[$index][] = $node->val;
            if ($node->left !== null) {
                $this->queue [] = [$node->left, $index - 1];
            }

            if ($node->right !== null) {
                $this->queue [] = [$node->right, $index + 1];

            }
        }
        ksort($this->order);
        return $this->order;
    }
}