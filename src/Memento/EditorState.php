<?php


namespace Memento;


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

    /**
     * @return mixed
     */
    public function getContent(): string
    {
        return $this->content;
    }
}