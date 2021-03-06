<?php


namespace App\DataStructures\LinkedList;


class DLinkedList implements LinkedListContract
{
    use HasShow;

    private ?DNode $head = null;
    private ?DNode $last = null;

    public function addToFirst(mixed $value): self
    {
        $node = new DNode($value);
        if ($this->isEmpty()) {
            $this->head = $this->last = $node;
        } else {
            $node->setNext($this->head);
            $this->head->setPrevious($node);
            $this->head = $node;
        }
        return $this;
    }

    public function addToLast(mixed $value): self
    {
        $node = new DNode($value);

        if ($this->isEmpty()) {
            $this->head = $this->last = $node;
        } else {
            $this->last->setNext($node);
            $node->setPrevious($this->last);
            $this->last = $node;
        }

        return $this;
    }

    public function deleteFromFirst(): self
    {
        if ($this->isEmpty()) {
            return $this;
        }

        if ($this->hasOnlyOneItem()) {
            $this->last = $this->head = null;
            return $this;
        }

        $next = $this->head->getNext();
        $next->setPrevious(null); // unset($this->head);// automatically garbage collected because there is no other references to this node
        $this->head = $next;
        return $this;
    }

    public function deleteFromLast(): self
    {
        if ($this->isEmpty()) {
            return $this;
        }

        if ($this->hasOnlyOneItem()) {
            $this->last = $this->head = null;
            return $this;
        }

        $previous = $this->last->getPrevious();
        $previous->setNext(null);// unset($this->last);// automatically garbage collected because there is no other references to this node
        $this->last = $previous;
        return $this;
    }

    private function getLink(): string
    {
        return ' <==> ';
    }

}
