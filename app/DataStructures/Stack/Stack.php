<?php


namespace App\DataStructures\Stack;


use App\DataStructures\LinkedList\Node;

class Stack
{
    private ?Node $top = null;

    public function push(mixed $value): self
    {
        $node = new Node($value);

        $node->setNext($this->top);

        $this->top = $node;
        return $this;
    }

    public function pop(): mixed
    {
        if ($this->isEmpty()) {
            return null;
        }

        if ($this->hasOnlyOneItem()) {
            $value = $this->top->getValue();
            $this->top = null;
            return $value;
        }

        $old = $this->top;
        $this->top = $old->getNext();
        $old->setNext(null);// automatic garbage collection
        dd($old);
        return $old->getValue();
    }

    public function show(): string
    {
        if ($this->isEmpty()) {
            return '<br><sup>---</sup><br><sub>---</sub>';
        }

        $show = '<p><sup>---</sup></p>';
        do {
            $show .= '<p>' . $this->top->getValue() . '</p>';
            $this->top = $this->top->getNext();
        } while ($this->top !== null);
        return $show . '<p><sub>---</sub></p>';

    }

    private function isEmpty(): bool
    {
        return $this->top === null;
    }

    private function hasOnlyOneItem(): bool
    {
        return !$this->isEmpty() && ($this->top->getNext() === null);
    }

}
