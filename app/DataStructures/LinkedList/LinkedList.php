<?php


namespace App\DataStructures\LinkedList;


class LinkedList implements LinkedListContract
{
    use HasShow;

    private ?NodeContract $head = null;
    private ?NodeContract $last = null;

    public function addToFirst(NodeContract $node): self
    {
        if ($this->listIsEmpty()) {
            $this->head = $this->last = $node;
        } else {
            $node->setNext($this->head);
            $this->head = $node;
        }
        return $this;
    }

    public function addToLast(NodeContract $node): self
    {
        if ($this->listIsEmpty()) {
            $this->head = $this->last = $node;
        } else {
            $this->last->setNext($node);
            $this->last = $node;
        }

        return $this;
    }


    public function deleteFromFirst(): self
    {
        if ($this->listIsEmpty()) {
            return $this;
        }

        if ($this->hasOnlyOneItem()) {
            $this->last = $this->head = null;
            return $this;
        }

        $head = $this->head;
        $next = $head->getNext();
        $head->setNext(null);// automatically garbage collected then
        $this->head = $next;
        return $this;
    }

    public function deleteFromLast(): self
    {
        if ($this->listIsEmpty()) {
            return $this;
        }

        if ($this->hasOnlyOneItem()) {
            $this->last = $this->head = null;
            return $this;
        }

        $secondLast = $this->getSecondLast();
        $secondLast->setNext(null);  // automatically garbage collected then
        $this->last = $secondLast;
        return $this;
    }

    private function getSecondLast(): Node
    {
        $item = $this->head;
        for ($i = $item->getNext(); $i->getNext() !== null; $i = $i->getNext()) {
            $item = $i;
        }
        return $item;
    }

    private function getLink(): string
    {
        return ' ==> ';
    }
}
