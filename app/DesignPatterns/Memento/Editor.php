<?php

namespace App\DesignPatterns\Memento;


class Editor //originator
{
    use HasContent;

    public function createState(): EditorState
    {
        return new EditorState($this->getContent());
    }

    public function restore(EditorState $editorState)
    {
        $this->setContent($editorState->getContent());
    }

}
