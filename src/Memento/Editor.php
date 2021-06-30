<?php


namespace Memento;

/**
 * Class Editor
 *
 * Represents the Originator role from the "Big 4"'s Memento design pattern.
 *
 * @package Memento
 */
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

    public function restore(EditorState $editorState): void
    {
        $this->content = $editorState->getContent();
    }

    public function setContent(string $string): void
    {
        $this->content = $string;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
