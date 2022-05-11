<?php


namespace App\DesignPatterns\Memento;


class History //caretaker
{
    /** @var $states EditorState[]* */
    private $states = [];

    public function push(EditorState $editorState)
    {
        $this->states[] = $editorState;
    }

    public function pop(): EditorState
    {
        return array_pop($this->states);
    }
}
