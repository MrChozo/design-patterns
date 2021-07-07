<?php


namespace State;


class Canvas
{
    /**
     * @var Tool $selectedTool
     */
    private $selectedTool;

    /**
     * Canvas constructor.
     * @param  Tool  $selectedTool
     */
    public function __construct(Tool $selectedTool)
    {
        $this->selectedTool = $selectedTool;
    }

    public function mouseUp()
    {
        $tool = $this->getSelectedTool();
        $tool->mouseUp();
    }

    public function mouseDown()
    {
        $tool = $this->getSelectedTool();
        $tool->mouseDown();
    }

    /**
     * @return Tool
     */
    public function getSelectedTool(): Tool
    {
        return $this->selectedTool;
    }

    /**
     * @param  Tool  $selectedTool
     */
    public function setSelectedTool(Tool $selectedTool): void
    {
        $this->selectedTool = $selectedTool;
    }
}
