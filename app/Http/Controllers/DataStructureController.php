<?php


namespace App\Http\Controllers;


use App\Core\Http\Controller;
use App\DataStructures\LinkedList;
use App\DataStructures\DLinkedList;
use App\DataStructures\Node;
use App\DataStructures\DNode;

class DataStructureController //extends Controller
{
    public function linkedlist()
    {
        //return $this->extracted(Node::class, new LinkedList);
        return $this->extracted(DNode::class, new LinkedList);
    }


    private function extracted(string $node, LinkedList|DLinkedList $list): ?string
    {
        $node1 = new $node(33);
        $node2 = new $node(22);
        $node3 = new $node(55);
        $node4 = new $node(11);
        $l = $list
            ->addToFirst($node1);
            //->addToFirst($node2)
            //->addToLast($node3)
            //->addToFirst($node4)
            ;
        echo $l->show();
        return $l->deleteFromFirst()->show();
           // ->deleteFromFirst()
           // ->show();
    }
}
