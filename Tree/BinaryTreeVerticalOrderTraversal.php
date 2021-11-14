<?php

namespace Hakam\LeetCodePhp\Tree;

class BinaryTreeVerticalOrderTraversal
{
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    private array $order = [];

    function verticalOrder($root) {

        $this->verticalNodeOrder($root,0,0);
        ksort($this->order);
        return $this->order;
    }

    public function verticalNodeOrder($node, $index,$row): void
    {
        if($node === null)
        {
            return;
        }
        if(isset($this->order[$index][$row]))
        {
            $newRow = $row+1;
            while(isset($this->order[$index][$newRow]))
            {
                ++$newRow;
            }
           $this->order[$index][$newRow] = $node->val;
        }else {
            $this->order[$index][$row] = $node->val;
        }
        ksort($this->order[$index]);

        if($node->left !== null)
        {
            $this->verticalNodeOrder($node->left,$index-1,$row+1);
        }

        if($node->right !== null)
        {
            $this->verticalNodeOrder($node->right,$index+1,$row+1);
        }
    }
}