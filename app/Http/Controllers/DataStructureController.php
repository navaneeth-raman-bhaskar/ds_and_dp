<?php


namespace App\Http\Controllers;


use App\DataStructures\LinkedList\LinkedList;
use App\DataStructures\LinkedList\DLinkedList;
use App\DataStructures\Stack\Stack;

class DataStructureController extends Controller
{
    public function linkedlist(
        LinkedList $list
     //   DLinkedList $list
)
    {
        $node1 = 33;
        $node2 = 22;
        $node3 = 55;
        $node4 = 11;
        $l = $list
            ->addToFirst($node1)
            ->addToFirst($node2)
            ->addToLast($node3)
            ->addToFirst($node4);
        echo $l->show();
        return $l->deleteFromFirst()->show();
        // ->deleteFromFirst()
        // ->show();
    }

    public function stack(Stack $stack): string
    {
        $stack
            ->push('22')
            ->push('33')
            ->push('44')
            ->push('55');;//$stack->pop()
        ;
        return $stack->show();
    }
}
