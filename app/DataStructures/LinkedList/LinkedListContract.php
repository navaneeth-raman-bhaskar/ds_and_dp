<?php


namespace App\DataStructures\LinkedList;


interface LinkedListContract
{
    public function addToFirst(mixed $node): self;

    public function addToLast(mixed $node): self;

    public function deleteFromFirst(): self;

    public function deleteFromLast(): self;

    public function indexOf(mixed $node): ?int;

    public function contains(mixed $value): bool;


}
