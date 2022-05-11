<?php

namespace App\DesignPatterns\Memento;


class EditorState //memento
{
    use HasContent;

    public function __construct(string $content)
    {
        $this->setContent($content);
    }
}
