<?php


namespace App\DataStructures;


interface LinkedListContract
{
    public function addToFirst(NodeContract $node): self;

    public function addToLast(NodeContract $node): self;

    public function deleteFromFirst(): self;

    public function deleteFromLast(): self;

    public function indexOf(mixed $node): ?int;

    public function contains(mixed $value): bool;


}
