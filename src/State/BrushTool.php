<?php


namespace State;


class BrushTool implements Tool
{

    public function mouseUp()
    {
        echo "Show painted line\n";
    }

    public function mouseDown()
    {
        echo "Circle icon\n";
    }
}