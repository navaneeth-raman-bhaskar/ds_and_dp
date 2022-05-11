<?php


namespace App\DataStructures;


class Node implements NodeContract
{
    private ?self $next = null;

    public function __construct(private mixed $value)
    {
    }

    public function getNext(): ?static
    {
        return $this->next;
    }

    public function setNext(?Node $next): void
    {
        $this->next = $next;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

}
