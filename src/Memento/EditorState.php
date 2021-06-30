<?php


namespace Memento;

/**
 * Class EditorState
 *
 * Represents the Memento role from the "Big 4"'s Memento design pattern.
 *
 * @package Memento
 */
class EditorState
{
    /**
     * @var string
     */
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}