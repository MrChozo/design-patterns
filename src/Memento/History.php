<?php


namespace Memento;


class History
{
    /**
     * @uses \Memento\EditorState
     * @var array
     */
    private $states = [];

    public function push(EditorState $editorState): void
    {
        $this->states[] = $editorState;
    }

    public function pop(): EditorState
    {
        return array_pop($this->states);
    }
}
