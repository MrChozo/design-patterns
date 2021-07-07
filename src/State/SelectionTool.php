<?php


namespace State;


class SelectionTool implements Tool
{

    public function mouseUp()
    {
        echo "Show dotted rectangle\n";
    }

    public function mouseDown()
    {
        echo "Crosshair icon\n";
    }
}