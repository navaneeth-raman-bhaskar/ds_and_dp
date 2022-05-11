<?php


namespace App\DataStructures;


trait HasShow
{
    public function show(): string
    {
        if ($this->listIsEmpty()) {
            return '||<br>';
        }

        $show = '<br>| ' . $this->head->getValue();

        for ($i = $this->head; $i->getNext() !== null; $i = $i->getNext()) {
            $show .= $this->getLink() . $i->getNext()->getValue();
        }
        return $show . ' |<br>';

    }

    private function listIsEmpty(): bool
    {
        return $this->head === null;
    }
    private function hasOnlyOneItem(): bool
    {
        return $this->head === $this->last;
    }

    public function indexOf(mixed $value): ?int
    {
        $index = 0;
        $current = $this->head;
        while ($current !== null) {
            if ($current->getValue() === $value) {
                return $index;
            }
            $index++;
            $current = $current->getNext();
        }
        return null;

    }

    public function contains(mixed $value): bool
    {

    }

    abstract private function getLink(): string;


}
