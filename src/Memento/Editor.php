<?php


namespace Memento;


class Editor
{
    /**
     * @var string
     */
    private $content;

    public function createState(): EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $editorState)
    {
        $this->content = $editorState->getContent();
    }

    public function setContent(string $string)
    {
        $this->content = $string;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
