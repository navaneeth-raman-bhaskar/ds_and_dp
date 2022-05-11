<?php


namespace App\DataStructures;


class DNode extends Node
{
    private ?self $previous = null;

    public function __construct(mixed $value)
    {
        parent::__construct($value);
    }

    public function getPrevious(): ?static
    {
        return $this->previous;
    }

    public function setPrevious(?DNode $previous): void
    {
        $this->previous = $previous;
    }
}
